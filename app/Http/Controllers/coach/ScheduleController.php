<?php

namespace App\Http\Controllers\coach;

use App\Http\Controllers\Controller;
use App\Models\CoachSchedule;
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

		$coachId = Auth::user()->id;
		$day = $request->day_of_week;
		$start = $request->start_time;
		$end = $request->end_time;


		$exists = CoachSchedule::where('coach_id', $coachId)
			->where('day_of_week', $day)
			->where(function ($query) use ($start, $end) {
				$query->where(function ($q) use ($start, $end) {
					$q->where('start_time', '<', $end)
						->where('end_time', '>', $start);
				});
			})
			->exists();

		if ($exists) {
			return response()->json([
				'status' => 'error',
				'message' => 'Overlap'
			], 422);
		}

		// ۴. ذخیره در دیتابیس
		CoachSchedule::create([
			'coach_id'    => $coachId,
			'day_of_week' => $day,
			'start_time'  => $start,
			'end_time'    => $end,
		]);

		return response()->json([
			'status' => 'success',
			'message' => 'created'
		], 201);
	}
	public function destroy($id)
	{
		$schedule = CoachSchedule::where('id', $id)
			->where('coach_id', Auth::user()->id)
			->first();

		if (!$schedule) {
			return response()->json([
				'status' => 'error',
				'message' => 'Schedule not found or access denied.'
			], 404);
		}

		$schedule->delete();

		return response()->json([
			'status' => 'success',
			'message' => 'Time slot has been deleted successfully.'
		]);
	}
}
