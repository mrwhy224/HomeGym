<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivateClassRequest extends Model
{
	protected $casts = [
		'requested_time' => 'array',
	];

	protected $fillable = [
		'user_id', 'coach_id', 'requested_time', 'status', 'admin_note'
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
