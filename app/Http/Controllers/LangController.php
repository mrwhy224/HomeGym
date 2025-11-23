<?php

namespace App\Http\Controllers;

class LangController
{
	public function handleInitialRedirect()
	{
		$locale = request()->cookie('user_locale');

		// toDo: Load user land based on GeoIp

		if (empty($locale)) {
			$locale = config('app.fallback_locale', 'en');
		}
		return redirect()->to("/{$locale}");
	}
}
