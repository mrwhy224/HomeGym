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
		$timezone = config('app.timezone');
		if (auth()->check())
			$timezone = auth()->user()->timezone ?? $timezone;
		config(['app.user_timezone' => $timezone]);
		return $next($request);
	}
}
