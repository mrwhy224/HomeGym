<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coach\Dashboard;

Route::get('/test', function() {

	return view('content.coach.financial', ['transactions'=>[]]);
});