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
			Route::middleware(['web', 'auth'])
				->prefix('panel')
				->group(base_path('routes/panel_index.php'));

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
		$middleware->redirectTo(

			// toDo: with some how, detect the user language
			guests: function () {
				$locale = app()->getLocale();
				return route('login.form', ['locale' => $locale]);
			}
		);
		$middleware->alias([
			'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
			'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
			'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
		]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
