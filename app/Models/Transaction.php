<?php

namespace App\Models;

use App\Services\CurrencyConverterService;
use Illuminate\Database\Eloquent\Concerns\HasUuids; // برای UUID
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Transaction extends Model
{
	use HasUuids;

	protected $fillable = [
		'wallet_id',
		'type',
		'amount',
		'confirmed',
		'original_amount',
		'currency_id',
		'exchange_rate',
		'reference_id',
		'reference_type',
		'description',
		'meta',
	];

	protected $casts = [
		'amount' => 'decimal:4',
		'original_amount' => 'decimal:4',
		'exchange_rate' => 'decimal:9',
		'confirmed' => 'boolean',
		'meta' => 'array',
	];


	public function wallet(): BelongsTo
	{
		return $this->belongsTo(Wallet::class);
	}

	public function currency(): BelongsTo
	{
		return $this->belongsTo(Currency::class);
	}

	public function reference(): MorphTo
	{
		return $this->morphTo();
	}

	public function getFormattedAmountAttribute()
	{
		$converter = app(CurrencyConverterService::class);
		$fromCurrency = $this->wallet->currency->code;
		$toCurrency = auth()->user()->currency->code ?? 'USD';
		return $converter->convert(abs($this->amount), $fromCurrency, $toCurrency, true, true);
	}
}
