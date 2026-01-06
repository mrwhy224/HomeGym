<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
	protected $primaryKey = 'user_id';
	public $incrementing = false;

	protected $fillable = [
		'user_id',
		'plan_id',
		'gender',
		'activity_level',
		'fitness_goal',
	];
	protected $casts = [
		'created_at' => 'datetime',
	];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function plan(): BelongsTo
	{
		return $this->belongsTo(Plan::class);
	}
}
