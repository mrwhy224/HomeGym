<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	protected $fillable = [
		'activity_id', 'user_id',
		'cancelled_at', 'cancelled_by', 'cancellation_reason'
	];

	protected $casts = [
		'cancelled_at' => 'datetime',
	];

	public function activity()
	{
		return $this->belongsTo(Activity::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
