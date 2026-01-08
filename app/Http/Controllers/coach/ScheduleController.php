<?php

namespace App\Http\Controllers\coach;

use App\Http\Controllers\Controller;
use App\Models\CoachSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
	public function index()
	{
		$coachId = auth()->id();
		$schedules = CoachSchedule::where('coach_id', $coachId)
			->orderBy('day_of_week')
			->orderBy('start_time')
			->get()
			->groupBy('day_of_week');

		return view('content.coach.schedule', compact('schedules'));
	}


	public function store(Request $request)
	{
		$request->validate([
			'day_of_week' => 'required|integer|between:0,6',
			'start_time'  => 'required|date_format:H:i',
			'end_time'    => 'required|date_format:H:i|after:start_time',
		]);

		$user = Auth::user();
		$userTimezone = $user->timezone ?? 'UTC';

		$startDateTime = Carbon::now($userTimezone)
			->startOfWeek(Carbon::SATURDAY)
			->addDays((int) $request->day_of_week)
			->setTimeFromTimeString($request->start_time);

		$endDateTime = Carbon::now($userTimezone)
			->startOfWeek(Carbon::SATURDAY)
			->addDays((int) $request->day_of_week)
			->setTimeFromTimeString($request->end_time);

		// ۲. تبدیل به UTC
		$startDateTime->setTimezone('UTC');
		$endDateTime->setTimezone('UTC');
		$utcStandardDay = $startDateTime->dayOfWeek;
		$utcDayForDatabase = ($utcStandardDay + 1) % 7;
		$utcStart = $startDateTime->format('H:i:s');
		$utcEnd   = $endDateTime->format('H:i:s');


		$exists = CoachSchedule::where('coach_id', $user->id)
			->where('day_of_week', $utcDayForDatabase)
			->where(function ($query) use ($utcStart, $utcEnd) {
				$query->where('start_time', '<', $utcEnd)
					->where('end_time', '>', $utcStart);
			})
			->exists();

		if ($exists)
			return response()->error(422, 'This time slot overlaps with your existing schedule (UTC shift checked).');


		CoachSchedule::create([
			'coach_id'    => $user->id,
			'day_of_week' => $utcDayForDatabase,
			'start_time'  => $utcStart,
			'end_time'    => $utcEnd,
		]);

		return response()->success('Schedule saved successfully in UTC.');
	}
	public function destroy($id)
	{
		$schedule = CoachSchedule::where('id', $id)->where('coach_id', Auth::user()->id)->first();
		if (!$schedule) return response()->error(404, 'Schedule not found or access denied.');
		$schedule->delete();
		return response()->success('Time slot has been deleted successfully.');
	}
}
