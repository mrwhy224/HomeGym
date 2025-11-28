<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\Dashboard;
use App\Http\Controllers\user\HelpCenter;
use App\Http\Controllers\user\Financial;


Route::get('/', [Dashboard::class, 'index'])->name('dashboard');
Route::get('/help', [HelpCenter::class, 'index'])->name('help-center');
Route::get('/financial/wallet', [Financial::class, 'wallet'])->name('financial.wallet');

Route::fallback(function () {return view('content.pages-error');});
