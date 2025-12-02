<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Coach extends Model
{
	protected $primaryKey = 'user_id';
	public $incrementing = false;

	protected $fillable = [
		'user_id',
		'headline',
		'bio',
		'specializations',
		'experience_years',
		'social_links',
		'is_verified',
		'verification_documents',
		'commission_percentage',
		'bank_name',
		'iban',
		'card_number',
		'account_holder_name',
		'rating_average',
		'total_reviews',
		'active_students',
	];

	protected $casts = [
		'specializations' => 'array',
		'social_links' => 'array',
		'verification_documents' => 'array',
		'is_verified' => 'boolean',
		'commission_percentage' => 'decimal:2',
		'rating_average' => 'decimal:2',
	];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function getWalletAttribute()
	{
		return $this->user->wallet;
	}
	public function schedules()
	{
		return $this->hasMany(CoachSchedule::class, 'coach_id', 'user_id');
	}
}
