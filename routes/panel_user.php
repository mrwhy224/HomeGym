<?php

use App\Http\Controllers\user\Classes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\HelpCenter;
use App\Http\Controllers\user\Financial;


Route::group(['prefix' => 'help','as' => 'help.'], function () {
	Route::get('faq', [HelpCenter::class, 'faq'])->name('faq');
	Route::get('support', [HelpCenter::class, 'support'])->name('support');
});

Route::group(['prefix' => 'financial','as' => 'financial.'], function () {
	Route::get('wallet', [Financial::class, 'wallet'])->name('wallet');
	Route::get('invoice/{invoice}', [Financial::class, 'invoice'])->name('invoice');
	Route::get('transaction', [Financial::class, 'transaction'])->name('transaction');
});

Route::group(['prefix' => 'classes','as' => 'classes.'], function () {

	Route::group(['prefix' => 'new','as' => 'new.'], function () {
		Route::get('non-private', [Classes::class, 'nonPrivate'])->name('non-private');
		Route::get('private', [Classes::class, 'private'])->name('private');
	});
	Route::get('calendar', [Classes::class, 'calendar'])->name('calendar');
	Route::get('get/{activity}', [Classes::class, 'details'])->name('details');
});

Route::get('messenger', function (){
	return view('content.user.messenger');
})->name('messenger');

Route::get('setting/account', function (){
	$allCurrencies = \App\Models\Currency::all();

	$languages = \App\Models\Language::all();
	$countries = \App\Models\Country::all();
	$timezones = \App\Models\Country::whereNotNull('default_timezone')->distinct()->pluck('default_timezone');

	return view('content.user.setting', compact('allCurrencies', 'languages', 'countries', 'timezones'));
})->name('setting.account');

Route::get('setting/security', function (){
	return view('content.user.security');
})->name('setting.security');



Route::group(['prefix' => 'api','as' => 'api.'], function () {
	Route::group(['prefix' => 'classes', 'as' => 'classes.'], function () {
		Route::post('book/{activity}', [Classes::class, 'bookClass'])->name('book');
		Route::get('heatmap', [Classes::class, 'getHeatmapData'])->name('heatmap');
		Route::post('matches', [Classes::class, 'findMatches'])->name('matches');
		Route::post('save', [Classes::class, 'store'])->name('savePrivate');
	});
});
