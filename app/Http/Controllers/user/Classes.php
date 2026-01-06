<?php

namespace App\Http\Controllers\user;

use App\Models\Activity;
use App\Models\Booking;
use App\Models\BookingSession;
use App\Models\Coach;
use App\Models\CoachSchedule;
use App\Models\Invoice;
use App\Models\PrivateClassRequest;
use App\Models\Transaction;
use App\Services\ActivityBookingService;
use App\Services\CurrencyConverterService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Classes
{
	protected $currencyConverter;

	public function __construct(CurrencyConverterService $currencyConverter)
	{
		$this->currencyConverter = $currencyConverter;
	}
	public function calendar()
	{
		$sessions = BookingSession::where('user_id', auth()->id())
			->with(['activitySession.activity'])
			->get();

		$events = $sessions->map(function ($session) {
			return [
				'id'    => $session->booking_id . '-' . $session->activity_session_id,
				'title' => $session->activitySession->activity->package->name ?? 'Class',
				'start' => $session->activitySession->start_at->formatUser('Y-m-d H:i:s'),
				'end'   => $session->activitySession->end_at->formatUser('Y-m-d H:i:s'),
				'allDay' => false,
				'extendedProps' => [
					'status'   => $session->status
				],
			];
		});

		return view('content.user.calendar', compact('events'));
	}
	public function getHeatmapData(Request $request)
	{
		$allSchedules = CoachSchedule::all();

		$heatmap = [];
		for ($d = 0; $d < 7; $d++) {
			$heatmap[$d] = [];
			for ($h = 0; $h <= 23; $h++)
				$heatmap[$d][$h] = 0;

		}
		// toDo: check for collision
		foreach ($allSchedules as $schedule) {
			$referenceDate = Carbon::now()->startOfWeek(Carbon::SATURDAY)->addDays($schedule->day_of_week);
			$startTime = Carbon::createFromFormat('Y-m-d H:i:s', $referenceDate->format('Y-m-d') . ' ' . $schedule->start_time);
			$endTime = Carbon::createFromFormat('Y-m-d H:i:s', $referenceDate->format('Y-m-d') . ' ' . $schedule->end_time);
			$userStartTime = Carbon::parse($startTime->formatUser());
			$userEndTime = Carbon::parse($endTime->formatUser());


			$current = $userStartTime->copy();
			while ($current < $userEndTime) {
				$day = $current->dayOfWeekIso;
				$mappedDay = ($day == 6) ? 0 : ($day + 1);
				$hour = $current->hour;
				if (isset($heatmap[$mappedDay][$hour]))
					$heatmap[$mappedDay][$hour]++;

				$current->addHour();
			}
		}
		$finalData = [];
		foreach ($heatmap as $day => $hours) {
			$finalData[$day] = [];
			foreach ($hours as $hour => $count)
				$finalData[$day][] = ['hour' => $hour, 'count' => $count];

		}
		return response()->success('The request was successfully processed.', $finalData);
	}
	public function findMatches(Request $request)
	{
		$userSlots = $request->input('slots');
		$coaches = Coach::with('schedules')->get();
		$allCoachesResults = [];
		$totalUserMinutes = 0;
		foreach ($userSlots as $slot) {
			$start = Carbon::createFromFormat('H:i', $slot['start']);
			$end = Carbon::createFromFormat('H:i', $slot['end']);
			$totalUserMinutes += $start->diffInMinutes($end);
		}

		foreach ($coaches as $coach) {
			$overlapMinutes = 0;
			foreach ($userSlots as $userSlot) {
				$coachDaySchedules = $coach->schedules->where('day_of_week', $userSlot['day']);
				foreach ($coachDaySchedules as $coachSchedule) {
					$cStart = Carbon::createFromFormat('H:i:s', $coachSchedule->start_time);
					$cEnd = Carbon::createFromFormat('H:i:s', $coachSchedule->end_time);

					$userTzStart = Carbon::parse($cStart->formatUser('H:i'));
					$userTzEnd = Carbon::parse($cEnd->formatUser('H:i'));

					$uStart = Carbon::createFromFormat('H:i', $userSlot['start']);
					$uEnd = Carbon::createFromFormat('H:i', $userSlot['end']);

					$overlapStart = $uStart->max($userTzStart);
					$overlapEnd = $uEnd->min($userTzEnd);

					if ($overlapStart < $overlapEnd)
						$overlapMinutes += $overlapStart->diffInMinutes($overlapEnd);

				}
			}

			$rawSessionCount = floor($overlapMinutes / 60);
			$maxPossibleSessions = min($rawSessionCount, 3);
			$isUsable = $overlapMinutes >= 60;

			$allCoachesResults[] = [
				'id' => $coach->user->id,
				'name' => $coach->user->name,
				'bio' => $coach->bio ?? 'Fitness Coach',
				'match_percentage' => ($totalUserMinutes > 0) ? round(($overlapMinutes / $totalUserMinutes) * 100) : 0,
				'overlap_minutes' => $overlapMinutes,
				'max_sessions' => (int)$maxPossibleSessions,
				'is_usable' => $isUsable
			];
		}
		usort($allCoachesResults, function($a, $b) {
			if ($a['is_usable'] === $b['is_usable']) {
				return $b['match_percentage'] <=> $a['match_percentage'];
			}
			return $b['is_usable'] <=> $a['is_usable'];
		});
		return response()->json(['coaches' => $allCoachesResults]);
	}
	public function store(Request $request)
	{
		$request->validate([
			'coach_id' => 'required|exists:users,id',
			'sessions_per_week' => 'required|integer|min:1|max:3',
			'slots' => 'required|array|min:1',
		]);

		try {
			$requestedTime = [
				'sessions_per_week' => $request->sessions_per_week,
				'slots' => $request->slots,
			];

			$booking = PrivateClassRequest::create([
				'user_id' => auth()->id(),
				'coach_id' => $request->coach_id,
				'requested_time' => $requestedTime,
				'status' => 'pending',
			]);
			return response()->json([
				'status' => 'success',
				'message' => 'Your request has been registered and is pending approval.',
				'booking_id' => $booking->id
			], 201);

		} catch (\Exception $e) {
			return response()->json([
				'status' => 'error',
				'message' => 'Failed to save request. Please try again later.'
			], 500);
		}
	}
	public function private()
	{
		return view('content.user.weekly_schedule_selector');
	}

	public function nonPrivate()
	{
		$userId = auth()->id();

		$activities = Activity::with(['sessions', 'package'])
			->whereHas('package', function ($query) {
				$query->where('type', '!=', 'private');
			})
			->withExists(['bookings' => function ($query) use ($userId) {
				$query->where('user_id', $userId);
			}])
			->get();
		return view('content.user.courses', ['activities' => $activities]);
	}

	public function details(Activity $activity)
	{
		$activity->load('sessions');
		return view('content.user.course-details', ['activity'=> $activity]);
	}

	public function bookClass(Activity $activity, ActivityBookingService $bookingService)
	{
		try {
			$user = auth()->user();
			$bookingService->book($activity, $user);
			return response()->success('User successfully enrolled and financial transactions processed.');

		} catch (Exception $e) {
			return response()->error(422, $e->getMessage());
		}
	}
}
