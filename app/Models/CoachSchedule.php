<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoachSchedule extends Model
{
	protected $fillable = ['coach_id', 'day_of_week', 'start_time', 'end_time'];
	protected $casts = [
		'day_of_week' => 'integer',
	];
	// متدی برای تبدیل عدد روز به نام فارسی یا انگلیسی
	public static function getDayName($day)
	{
		$days = [
			0 => 'Saturday', 1 => 'Sunday', 2 => 'Monday',
			3 => 'Tuesday', 4 => 'Wednesday', 5 => 'Thursday', 6 => 'Friday'
		];
		return $days[$day] ?? '';
	}
	public function coach()
	{
		return $this->belongsTo(User::class, 'coach_id');
	}
}
