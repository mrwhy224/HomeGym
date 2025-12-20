<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
	public function swap(Request $request, $locale)
	{
		if (!in_array($locale, $this->getActiveLocales())) {
			abort(400);
		} else {
			$request->session()->put('locale', $locale);
		}
		App::setLocale($locale);
		return redirect()->back();
	}

	private function getActiveLocales(): array
	{
		return Cache::rememberForever('active_locales', function () {
			return DB::table('languages')->pluck('code', 'name')->toArray();
		});
	}
}
