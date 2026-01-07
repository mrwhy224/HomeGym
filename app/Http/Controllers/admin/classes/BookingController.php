<?php

namespace App\Http\Controllers\admin\classes;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ActivitySession;
use App\Models\Booking;
use App\Models\BookingSession;
use App\Models\CoachSchedule;
use App\Models\PrivateClassRequest;
use App\Models\User;
use App\Services\ActivityBookingService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
	public function index()
	{
		return view('content.admin.booking.all',['requests'=>PrivateClassRequest::all()]);
	}
	public function process($id)
	{
		return view('content.admin.booking.process',['booking'=> PrivateClassRequest::find($id)]);
	}
	public function getHeatmapData($id)
	{
		$booking = PrivateClassRequest::findOrFail($id);
		$coachUserId = $booking->coach_id;
		$studentRequestedSlots = $booking->requested_time['slots'] ?? [];

		$matrix = [];
		for ($d = 0; $d < 7; $d++)
			for ($h = 0; $h <= 23; $h++)
				$matrix[$d][$h] = ['student' => false,'coach' => false];

		foreach ($studentRequestedSlots as $slot) {
			$day = (int)$slot['day'];
			$startHour = (int)explode(':', $slot['start'])[0];
			$endHour = (int)explode(':', $slot['end'])[0];

			for ($h = $startHour; $h < $endHour; $h++)
				if (isset($matrix[$day][$h]))
					$matrix[$day][$h]['student'] = true;


		}

		$coachSchedules = CoachSchedule::where('coach_id', $coachUserId)->get();
		foreach ($coachSchedules as $schedule) {

			$referenceDate = Carbon::now()->startOfWeek(Carbon::SATURDAY)->addDays($schedule->day_of_week);
			$startTime = Carbon::parse($referenceDate->format('Y-m-d') . ' ' . $schedule->start_time);
			$endTime = Carbon::parse($referenceDate->format('Y-m-d') . ' ' . $schedule->end_time);

			// اگر سیستم شما تبدیل تایم‌زون دارد (مثل متد formatUser شما):
			$startConverted = Carbon::parse($startTime->formatUser());
			$endConverted = Carbon::parse($endTime->formatUser());

			$current = $startConverted->copy();
			while ($current < $endConverted) {
				$dayIso = $current->dayOfWeekIso;
				$mappedDay = ($dayIso == 6) ? 0 : ($dayIso + 1);
				$hour = $current->hour;

				if (isset($matrix[$mappedDay][$hour]))
					$matrix[$mappedDay][$hour]['coach'] = true;
				$current->addHour();
			}
		}

		$finalComparison = [];
		foreach ($matrix as $day => $hours) {
			$finalComparison[$day] = [];
			foreach ($hours as $hour => $status) {
				$matchLevel = 0;
				$infoText = "No availability";

				if ($status['student'] && $status['coach']) {
					$matchLevel = 2; // سبز (Perfect Overlap)
					$infoText = "Both Student & Coach are available";
				} elseif ($status['student'] || $status['coach']) {
					$matchLevel = 1;
					$infoText = $status['student'] ? "Only Student is available" : "Only Coach is available";
				}

				$finalComparison[$day][] = [
					'hour' => $hour,
					'match_level' => $matchLevel,
					'info_text' => $infoText
				];
			}
		}

		return response()->json(['comparison' => $finalComparison]);
	}
	public function approve(Request $request, $id)
	{
		$request->validate([
			'slots' => 'required|array|min:1',
		]);

		$booking = PrivateClassRequest::with(['user', 'coach'])->findOrFail($id);
		$adminTimezone = auth()->user()->timezone ?? 'Asia/Tehran';

		DB::beginTransaction();
		try {
			$course = Activity::create([
				'coach_id'    => $booking->coach_id,
				'package_id'   => 4,
				'remaining_capacity' => 0,
			]);

			$book = Booking::create([
				'activity_id'    => $course->id,
				'user_id'   => $booking->user->id,
			]);

			$slots = $request->slots;
			$totalSessionsToCreate = 12;
			$sessionsCreated = 0;


			$currentWeekAnchor = Carbon::now($adminTimezone)->startOfWeek(Carbon::SATURDAY);

			while ($sessionsCreated < $totalSessionsToCreate) {
				foreach ($slots as $slot) {
					if ($sessionsCreated >= $totalSessionsToCreate) break;

					// محاسبه تاریخ دقیق جلسه بر اساس لنگر هفته جاری و ایندکس روز (0 برای شنبه)
					$sessionDate = $currentWeekAnchor->copy()->addDays((int)$slot['day']);

					// ۳. اگر تاریخ محاسبه شده در گذشته است (مثلاً امروز دوشنبه است و اسلات شنبه را چک میکنیم)، آن را رد کن
					if ($sessionDate->lt(Carbon::now($adminTimezone)->startOfDay())) {
						continue;
					}

					// ترکیب تاریخ با ساعت شروع و پایان ادمین
					$adminStart = Carbon::createFromFormat('Y-m-d H:i', $sessionDate->format('Y-m-d') . ' ' . $slot['start'], $adminTimezone);
					$adminEnd = Carbon::createFromFormat('Y-m-d H:i', $sessionDate->format('Y-m-d') . ' ' . $slot['end'], $adminTimezone);

					// تبدیل به UTC برای دیتابیس
					$utcStart = $adminStart->copy()->setTimezone('UTC');
					$utcEnd = $adminEnd->copy()->setTimezone('UTC');

					// ۴. ذخیره در دیتابیس
					$activity_session = ActivitySession::create([
						'activity_id'  => $course->id,
						'start_at' => $utcStart,
						'end_at'   => $utcEnd,
						'status'     => 'scheduled',
					]);

					BookingSession::create([
						'booking_id' => $book->id,
						'activity_session_id' => $activity_session->id,
						'user_id' => $booking->user->id,
					]);

					$sessionsCreated++;
				}

				// ۵. حرکت لنگر به شنبه هفته بعد
				$currentWeekAnchor->addWeek();
			}

			$booking->update(['status' => 'approved']);
			DB::commit();

			return response()->json(['status' => 'success', 'message' => 'Class activated and sessions scheduled.']);

		} catch (\Exception $e) {
			DB::rollBack();
			return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
		}
	}

	private function getNextDateForDay($startDate, $dayIndex)
	{
		// تبدیل ایندکس شنبه=0 به فرمت کربن (شنبه=6 یا بر اساس تنظیمات)
		// در اینجا فرض شده ادمین شنبه را 0 فرستاده است
		$daysMap = [0 => 6, 1 => 0, 2 => 1, 3 => 2, 4 => 3, 5 => 4, 6 => 5]; // نگاشت به ISO days
		$targetDay = $daysMap[$dayIndex];

		return Carbon::now()->next($targetDay);
	}
	public function calendar()
	{
		return view('content.admin.booking.calender', ['users'=>User::all()]);
	}
	public function enrollUser(Request $request, Activity $activity, ActivityBookingService $bookingService)
	{
		$request->validate([
			'user_id' => 'required|exists:users,id'
		]);
		try {
			$user = User::findOrFail($request->user_id);
			$bookingService->book($activity, $user);

			return response()->success('User successfully enrolled and financial transactions processed.');

		} catch (\Exception $e) {
			return response()->error(422, $e->getMessage());
		}
	}
}
