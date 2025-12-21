<?php

namespace App\Providers;

use App\Services\CurrencyConverterService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Vite;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 */
	public function register(): void
	{
		$this->app->singleton(CurrencyConverterService::class, function ($app) {
			return new CurrencyConverterService();
		});
	}

	/**
	 * Bootstrap any application services.
	 */
	public function boot(): void
	{
		Schema::defaultStringLength(191);
		Vite::useStyleTagAttributes(function (?string $src, string $url, ?array $chunk, ?array $manifest) {
			if ($src !== null) {
				return [
					'class' => preg_match("/(resources\/assets\/vendor\/scss\/(rtl\/)?core)-?.*/i", $src) ? 'template-customizer-core-css' : (preg_match("/(resources\/assets\/vendor\/scss\/(rtl\/)?theme)-?.*/i", $src) ? 'template-customizer-theme-css' : '')
				];
			}
			return [];
		});

		if (Schema::hasTable('languages')) {
			$defaultLocale = DB::table('languages')
				->where('is_default', 1)
				->value('code');
			if ($defaultLocale)
				Config::set('app.fallback_locale', $defaultLocale);


		}

		Carbon::macro('formatUser', function ($format = 'Y-m-d H:i:s') {
			$timezone = config('app.user_timezone', config('app.timezone'));

			return $this->copy()->setTimezone($timezone)->format($format);
		});

	}
}
