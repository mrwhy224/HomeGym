<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\HelpCenter;
use App\Http\Controllers\user\Financial;


Route::get('/help', [HelpCenter::class, 'index'])->name('help-center');
Route::get('/financial/wallet', [Financial::class, 'wallet'])->name('financial.wallet');


Route::get('/req', function () {
	return view('content.user.weekly_schedule_selector');
});
