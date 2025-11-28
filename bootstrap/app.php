<?php

use App\Http\Middleware\CurrencyMiddleware;
use App\Http\Middleware\SetUserTimezone;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
	->withRouting(
		// web: __DIR__.'/../routes/web.php',
//		api: __DIR__.'/../routes/api.php',
		commands: __DIR__.'/../routes/console.php',
		health: '/up',
		then: function () {

			// toDo: the roles name may need a change in the future
			$disableAuth = config('app.disable_auth', false); // toDO: remove in production
			$adminMiddleware = $disableAuth
				? ['web']
				: ['web', 'auth', 'role:super_admin|content_manager|finance_manager'];

			$coachMiddleware = $disableAuth
				? ['web']
				: ['web', 'auth', 'role:coach'];

			$userMiddleware = $disableAuth
				? ['web']
				: ['web', 'auth', 'role:customer'];

			Route::middleware($adminMiddleware)
				->prefix('panel')
				->as('admin.')
				->group(base_path('routes/panel_admin.php'));
			Route::middleware($coachMiddleware)
				->prefix('panel')
				->as('coach.')
				->group(base_path('routes/panel_coach.php'));
			Route::middleware($userMiddleware)
				->prefix('panel')
				->as('user.')
				->group(base_path('routes/panel_user.php'));
			Route::prefix('demo') // toDO: remove demo later
				->group(base_path('routes/demo.php'));

			Route::middleware('web')
				->group(base_path('routes/web.php'));
		}
	)
    ->withMiddleware(function (Middleware $middleware) {
		$middleware->web(LocaleMiddleware::class);
		$middleware->web(CurrencyMiddleware::class);
		$middleware->web(SetUserTimezone::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
