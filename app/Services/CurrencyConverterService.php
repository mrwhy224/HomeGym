<?php

namespace App\Services;


use App\Models\Currency;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CurrencyConverterService
{
	protected Collection $currencies;
	protected string $userDisplayCurrency;
	protected object $baseCurrencyData;

	public function __construct()
	{
		$this->currencies = $this->loadCurrenciesFromCache();

		$this->baseCurrencyData = $this->currencies->firstWhere('is_default', 1);
		if (!$this->baseCurrencyData)
			throw new Exception("Default currency must be defined in the database.");

		$this->userDisplayCurrency = $this->baseCurrencyData->code;
	}

	protected function loadCurrenciesFromCache(): Collection
	{
		return Cache::rememberForever('currencies', function () {
			return Currency::get()->keyBy('code');
		});
	}
	public function getAmount($amount, bool $standardFormat=false, bool $withSymbol=false): float|string
	{
		// toDo: not work yet
		return $this->convert($amount, $this->baseCurrencyData->code, Auth::user()->currency->code, $standardFormat, $withSymbol);
	}
	public function toDefault(float $amount, string $fromCode, bool $standardFormat=false, bool $withSymbol=false): float|string
	{
		return $this->convert($amount, $fromCode, $this->baseCurrencyData->code, $standardFormat, $withSymbol);
	}

	public function fromDefault(float $amount, string $toCode, bool $standardFormat=false, bool $withSymbol=false): float|string
	{
		return $this->convert($amount, $this->baseCurrencyData->code, $toCode, $standardFormat, $withSymbol);
	}

	public function convert(float $amount, string $fromCode, string $toCode, bool $standardFormat=false, bool $withSymbol=false): float|string
	{
		$fromRate = $this->currencies[$fromCode]->exchange_rate ?? null;
		$toRate   = $this->currencies[$toCode]->exchange_rate ?? null;
		$baseRate = $this->baseCurrencyData->exchange_rate;
		if (!$fromRate || !$toRate)
			throw new Exception("One or both currency codes are invalid.");


		$finalAmount = (($amount / $fromRate) * $baseRate * $toRate) / $baseRate;
		$final = $standardFormat? number_format($finalAmount, $this->currencies[$toCode]->precision ?? 2):round($finalAmount, $this->currencies[$toCode]->precision ?? 2);
		return $withSymbol? $final.' '.$this->currencies[$toCode]->symbol:$final;
	}
	public function getConversionRate(string $fromCode, string $toCode): float|int
	{
		$fromCurrency = $this->currencies[$fromCode] ?? null;
		$toCurrency   = $this->currencies[$toCode] ?? null;

		if (!$fromCurrency || !$toCurrency)
			throw new Exception("Currency codes are invalid.");

		return (1 / $fromCurrency->exchange_rate) * $toCurrency->exchange_rate;
	}
	public function getConversionRateToDefault(string $fromCode): float|int
	{
		return $this->getConversionRate($fromCode, $this->baseCurrencyData->code);
	}
	public function getConversionRateFromDefault(string $toCode): float|int
	{
		return $this->getConversionRate($this->baseCurrencyData->code, $toCode);
	}
}
