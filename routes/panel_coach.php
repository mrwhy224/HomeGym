<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coach\Dashboard;



Route::get('/', [Dashboard::class, 'index'])->name('dashboard');

Route::fallback(function () {return view('content.pages-error');});
