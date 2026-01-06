<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActivitySession extends Model
{
	protected $fillable = [
		'activity_id',
		'start_at',
		'end_at',
		'status',
	];
	protected $casts = [
		'start_at' => 'datetime',
		'end_at' => 'datetime',
	];

	public function activity()
	{
		return $this->belongsTo(Activity::class, 'activity_id');
	}
	public function bookingSessions(): HasMany
	{
		return $this->hasMany(BookingSession::class, 'activity_session_id');
	}
}
