<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\View;
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
		View::composer('*', function ($view) {
        $jsonPath = base_path('resources/menu/verticalMenu.json');

        if (Auth::check()) {
            $user = Auth::user();

            if ($user->hasRole('super_admin') || $user->hasRole('content_manager')) {
                $jsonPath = base_path('resources/menu/adminVerticalMenu.json');
            } elseif ($user->hasRole('coach')) {
                $jsonPath = base_path('resources/menu/coachVerticalMenu.json');
            } elseif ($user->hasRole('customer')) {
                $jsonPath = base_path('resources/menu/userVerticalMenu.json');
            }
        }

        $menuData = [json_decode(file_get_contents($jsonPath))];
        $view->with('menuData', $menuData);
    });
	}
}
