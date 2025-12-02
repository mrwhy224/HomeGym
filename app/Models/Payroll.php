<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Payroll extends Model
{
	protected $fillable = [
		'coach_id',
		'total_amount',
		'payout_amount',
		'currency_id',
		'exchange_rate',
		'period_start',
		'period_end',
		'status',
		'details',
		'tracking_code',
		'paid_at',
	];

	protected $casts = [
		'total_amount' => 'decimal:4',
		'payout_amount' => 'decimal:4',
		'exchange_rate' => 'decimal:9',
		'period_start' => 'date',
		'period_end' => 'date',
		'details' => 'array',
		'paid_at' => 'datetime',
	];


	public function coach(): BelongsTo
	{
		return $this->belongsTo(User::class, 'coach_id');
	}

	public function currency(): BelongsTo
	{
		return $this->belongsTo(Currency::class);
	}

	public function transactions(): MorphMany
	{
		return $this->morphMany(Transaction::class, 'reference');
	}
}
