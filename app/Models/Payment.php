<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Payment extends Model
{
	protected $fillable = [
		'user_id',
		'amount',
		'paid_amount',
		'currency_id',
		'exchange_rate',
		'gateway',
		'transaction_ref_id',
		'status',
		'description',
	];

	protected $casts = [
		'amount' => 'decimal:4',
		'paid_amount' => 'decimal:4',
		'exchange_rate' => 'decimal:9',
	];



	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
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
