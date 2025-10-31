<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 */
	public function register(): void
	{
		//
	}

	/**
	 * Bootstrap services.
	 */
	public function boot(): void
	{
		$verticalMenuJson = file_get_contents(base_path('resources/menu/verticalMenu.json'));
		if (Request::is('admin*'))
			$verticalMenuJson = file_get_contents(base_path('resources/menu/adminVerticalMenu.json'));
		elseif (Request::is('coach*'))
			$verticalMenuJson = file_get_contents(base_path('resources/menu/coachVerticalMenu.json'));
		elseif (Request::is('user*'))
			$verticalMenuJson = file_get_contents(base_path('resources/menu/userVerticalMenu.json'));
		$this->app->make('view')->share('menuData', [json_decode($verticalMenuJson)]);
	}
}
