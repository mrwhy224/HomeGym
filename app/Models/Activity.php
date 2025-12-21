<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $fillable = [
		'coach_id', 'type', 'capacity', 'start_at', 'end_at', 'status', 'is_modified_duration'
	];

	protected $casts = [
		'is_modified_duration' => 'boolean',
	];

	public function coach()
	{
		return $this->belongsTo(User::class, 'coach_id');
	}
	public function bookings()
	{
		return $this->hasMany(Booking::class);
	}

	public function getIsFullAttribute()
	{
		return $this->bookings()->whereNull('cancelled_at')->count() >= $this->capacity;
	}
	public function sessions()
	{
		return $this->hasMany(ActivitySession::class);
	}

	protected function weeklySchedule(): Attribute
	{
		return Attribute::make(
			get: function () {
				if ($this->sessions->isEmpty()) {
					return ['days' => ['TBD'], 'time' => 'Not Scheduled', 'count' => 0];
				}

				// استفاده از pluck و map بدون تغییر دادن اشیاء اصلی sessions
				$days = $this->sessions->map(function($session) {
					return $session->start_at->formatUser('D');
				})->unique()->sort()->values()->toArray();

				// استفاده از متد کپی برای محاسبات زمانی
				$minStart = $this->sessions->min('start_at');
				$maxEnd = $this->sessions->max('end_at');

				return [
					'days' => $days,
					'time' => $minStart->formatUser('H:i') . ' - ' . $maxEnd->formatUser('H:i'),
					'count' => count($days)
				];
			}
		);
	}

	public function package()
	{
		return $this->belongsTo(Package::class);
	}
}
