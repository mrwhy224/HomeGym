<?php

namespace App\Models;

use App\Services\CurrencyConverterService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wallet extends Model
{
	protected $fillable = [
		'user_id',
		'currency_id',
		'name',
		'holder_type',
		'balance',
		'balance_blocked',
		'is_active',
	];

	protected $casts = [
		'balance' => 'decimal:4',
		'balance_blocked' => 'decimal:4',
		'is_active' => 'boolean',
	];



	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function currency(): BelongsTo
	{
		return $this->belongsTo(Currency::class);
	}

	public function transactions(): HasMany
	{
		return $this->hasMany(Transaction::class);
	}

	public function getAvailableBalanceAttribute()
	{
		return $this->balance - $this->balance_blocked;
	}
	public function getDisplayBalanceAttribute()
	{
		$converter = app(CurrencyConverterService::class);
		return $converter->convert($this->getAvailableBalanceAttribute(), $this->currency->code, $this->currency->code, true, true);
	}
}
