<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\Dashboard;


Route::get('/', [Dashboard::class, 'index'])->name('dashboard-analytics');