<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
	$user = Auth::user();
	if ($user->hasRole(['super_admin', 'content_manager']))
		return app(\App\Http\Controllers\admin\Dashboard::class)->index();
	if ($user->hasRole('coach'))
		return app(\App\Http\Controllers\coach\Dashboard::class)->index();
	if ($user->hasRole('customer'))
		return app(\App\Http\Controllers\user\Dashboard::class)->index();
})->name('dashboard');

Route::middleware(['role:super_admin|content_manager'])->as('admin.')->group(function () {
    require base_path('routes/panel_admin.php');
});

Route::middleware(['role:coach'])->as('coach.')->group(function () {
    require base_path('routes/panel_coach.php');
});

Route::middleware(['role:customer'])->as('user.')->group(function () {
    require base_path('routes/panel_user.php');
});

Route::fallback(function () {return view('content.pages-error');});
