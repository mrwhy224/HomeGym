<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $fillable = [
		'coach_id', 'type', 'capacity', 'start_at', 'end_at', 'status', 'is_modified_duration'
	];

	protected $casts = [
		'start_at' => 'datetime',
		'end_at' => 'datetime',
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
}
