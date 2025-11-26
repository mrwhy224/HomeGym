<?php

namespace App\Http\Middleware;

use App\Models\Currency;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class CurrencyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
		$currencies = $this->loadCurrenciesFromCache();
		$baseCurrencyData = $currencies->firstWhere('is_default', 1);
		View::share('currencies', $currencies);
		View::share('baseCurrency', $baseCurrencyData);
        return $next($request);
    }
	protected function loadCurrenciesFromCache(): Collection
	{
		return Cache::rememberForever('currencies', function () {
			return Currency::get()->keyBy('code');
		});
	}
}
