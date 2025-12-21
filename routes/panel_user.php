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

Route::get('setting', function (){
	return view('content.user.setting');
})->name('setting');



