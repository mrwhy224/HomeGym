<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingSession extends Model
{
	protected $fillable = [
		'booking_id',
		'user_id',
		'activity_session_id',
		'cancelled_at',
		'cancellation_reason',
		'status',
	];
	public function activitySession()
	{
		return $this->belongsTo(ActivitySession::class, 'activity_session_id');
	}
}
