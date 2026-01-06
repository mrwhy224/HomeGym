<?php

namespace App\Http\Controllers\admin\classes;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Coach;
use App\Models\Package;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
	{
		$activities = Activity::with(['sessions', 'coach'])
			->latest()
			->paginate(9);

		$coaches = Coach::all();

		return view('content.admin.classes.all', [
			'activities' => $activities,
			'instructors' => $coaches,
		]);
	}

	public function attendance(Activity $activity)
	{
		$activity->load([
			'package',
			'bookings.user',
			'bookings.sessions',
			'sessions'
		]);

		$totalSessions = $activity->sessions->count();
		return view('content.admin.classes.attendance', compact('activity', 'totalSessions'));
	}
	public function show(Activity $activity)
	{
		$activity->load([
			'package',
			'coach',
			'sessions' => function ($query) {
				$query->withCount(['bookingSessions as attended_count' => function ($q) {
					$q->where('status', 'attended');
				}]);
			}
		]);
		$stats = [
			'total_sessions' => $activity->sessions->count(),
			'completed_sessions' => $activity->sessions->where('status', 'completed')->count(),
			'canceled_sessions' => $activity->sessions->where('status', 'canceled')->count(),
			'total_enrolled' => $activity->bookings()->count(),
		];

		return view('content.admin.classes.show', compact('activity', 'stats'));
	}
	public function create()
	{
		return view('content.admin.classes.create', ['packages'=>Package::all(), 'coaches'=> Coach::all()]);
	}
}
