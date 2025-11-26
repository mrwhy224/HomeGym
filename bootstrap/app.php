<?php

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

			$disableAuth = config('app.disable_auth', false);
			$adminMiddleware = $disableAuth
				? ['web']
				: ['web', 'auth', 'role:admin'];

			$coachMiddleware = $disableAuth
				? ['web']
				: ['web', 'auth', 'role:coach'];

			$userMiddleware = $disableAuth
				? ['web']
				: ['web', 'auth', 'role:user'];

			Route::middleware($adminMiddleware)
				->prefix('admin')
				->as('admin.')
				->group(base_path('routes/panel_admin.php'));
			Route::middleware($coachMiddleware)
				->prefix('coach')
				->as('coach.')
				->group(base_path('routes/panel_coach.php'));
			Route::middleware($userMiddleware)
				->prefix('user')
				->as('user.')
				->group(base_path('routes/panel_user.php'));
			Route::prefix('demo')
				->group(base_path('routes/demo.php'));

			Route::middleware('web')
				->group(base_path('routes/web.php'));
		}
	)
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(LocaleMiddleware::class);
		$middleware->web(SetUserTimezone::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
