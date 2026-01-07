<?php

use App\Http\Controllers\coach\ScheduleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coach\Dashboard;

Route::get('/test', function() {

	return view('content.coach.financial', ['transactions'=>[]]);
});

Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
Route::post('/schedule', [ScheduleController::class, 'store'])->name('schedule.store');
Route::post('/schedule/delete/{id}', [ScheduleController::class, 'destroy'])->name('api.schedule.delete');
