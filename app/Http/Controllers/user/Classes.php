<?php

namespace App\Http\Controllers\user;

use App\Models\Activity;

class Classes
{
	public function calendar()
	{
		return view('content.user.calendar');
	}

	public function private()
	{
		return view('content.user.weekly_schedule_selector');
	}

	public function nonPrivate()
	{
		$all_activity = Activity::with('sessions')->get();
		return view('content.user.courses', ['activities'=> $all_activity]);
	}

	public function details(Activity $activity)
	{
		$activity->load('sessions');
		return view('content.user.course-details', ['activity'=> $activity]);
	}
}
