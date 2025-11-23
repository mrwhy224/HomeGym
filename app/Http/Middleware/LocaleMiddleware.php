<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
	public function handle(Request $request, Closure $next): Response
	{
		$locale = $request->route('locale');
		$currentCookieLocale = $request->cookie('user_locale');
		$activeLocales = $this->getActiveLocales();
		View::share('activeLocales', $activeLocales);

		if ($locale && in_array($locale, $activeLocales)) {
			$setLocale = $locale;
			App::setLocale($setLocale);
			$direction = $this->getDirection($locale);
			Config::set('app.direction', $direction);
			View::share('localeDirection', $direction);


			$response = $next($request);
			if ($setLocale !== $currentCookieLocale)
				$response = $response->withCookie(Cookie::forever('user_locale', $setLocale));
			return $response;
		}


		if ($currentCookieLocale && in_array($currentCookieLocale, $activeLocales)) {
			App::setLocale($currentCookieLocale);
			$direction = $this->getDirection($currentCookieLocale);
			Config::set('app.direction', $direction);
			View::share('localeDirection', $direction);
			return $next($request);
		}
		$fallbackLocale = Config::get('app.fallback_locale', 'en');
		$direction = $this->getDirection($fallbackLocale);
		Config::set('app.direction', $direction);
		View::share('localeDirection', $direction);
		return $next($request);
	}
	private function getActiveLocales(): array
	{
		return Cache::rememberForever('active_locales', function () {
			return DB::table('languages')->pluck('code','name')->toArray();
		});
	}
	private function getDirection(string $locale): string
	{
		$cacheKey = "locale.direction.{$locale}";
		return Cache::rememberForever($cacheKey, function () use ($locale) {
			$language = DB::table('languages')
				->where('code', $locale)
				->select('direction')
				->first();
			return $language ? $language->direction : 'ltr';
		});
	}
}
