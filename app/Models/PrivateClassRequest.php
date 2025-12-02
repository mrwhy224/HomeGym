<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivateClassRequest extends Model
{
	protected $fillable = [
		'user_id', 'coach_id', 'user_package_id',
		'requested_start_at', 'duration_minutes', 'status', 'admin_note'
	];

	protected $casts = [
		'requested_start_at' => 'datetime',
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function coach()
	{
		return $this->belongsTo(User::class, 'coach_id');
	}
	public function userPackage()
	{
		return $this->belongsTo(UserPackage::class);
	}
}
