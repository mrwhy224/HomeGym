<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Invoice extends Model
{
	protected $fillable = [
		'user_id',
		'invoiceable_id',
		'invoiceable_type',
		'currency_id',
		'amount',
		'tax',
		'discount',
		'final_total',
		'status',
		'due_date',
		'paid_at',
	];

	protected $casts = [
		'amount' => 'decimal:4',
		'tax' => 'decimal:4',
		'discount' => 'decimal:4',
		'final_total' => 'decimal:4',
		'due_date' => 'datetime',
		'paid_at' => 'datetime',
	];


	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
	public function invoiceable(): MorphTo
	{
		return $this->morphTo();
	}

	public function currency(): BelongsTo
	{
		return $this->belongsTo(Currency::class);
	}
}
