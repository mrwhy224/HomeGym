<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetUserTimezone
{
	public function handle(Request $request, Closure $next)
	{
//		if (auth()->check()) {
//			$timezone = auth()->user()->timezone ?? 'UTC';
//		} else {
//			$timezone = config('app.timezone');
//		}
		// toDO: load timezone from database
		config(['app.user_timezone' => 'Asia/Tehran']);

		return $next($request);
	}
}
