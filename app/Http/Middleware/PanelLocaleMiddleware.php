<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class PanelLocaleMiddleware
{
	public function handle(Request $request, Closure $next): Response
	{
		$activeLocales = $this->getActiveLocales();
		$sessionLocale = session()->get('locale');

		if ($sessionLocale && $activeLocales->contains('code', $sessionLocale))
			app()->setLocale($sessionLocale);

		View::share('activeLocales', $activeLocales);
		return $next($request);
	}
	private function getActiveLocales()
	{
		return Cache::rememberForever('panel_active_locales', function () {
			return DB::table('languages')->select('name', 'code', 'direction')->get();
		});
	}
}
