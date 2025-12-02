<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{
	protected $fillable = [
		'user_id', 'package_id', 'remaining_sessions', 'cancellation_count', 'expires_at', 'is_active'
	];

	protected $casts = [
		'expires_at' => 'datetime',
		'is_active' => 'boolean',
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function package()
	{
		return $this->belongsTo(Package::class);
	}

	public function bookings()
	{
		return $this->hasMany(Booking::class);
	}
}
