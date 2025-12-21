<?php

use App\Http\Controllers\pages\MiscComingSoon;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main\HomeControllerMain;
use App\Http\Controllers\main\PagesController;





$activeLocales = DB::table('languages')->pluck('code')->toArray();
Route::group(['prefix' => '{locale}', 'where' => ['locale' => implode('|', $activeLocales)]], function () {

	Route::get('/', [HomeControllerMain::class, 'index'])->name('index');
	Route::get('login', [UserController::class, 'showLogin'])->name('login.form');
	Route::post('login', [UserController::class, 'loginAttempt'])->name('login.attempt');

});
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/', [\App\Http\Controllers\LangController::class, 'handleInitialRedirect']);

//Route::get('/', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index2', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index3', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index-one-page', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index2-one-page', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index3-one-page', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index-dark', [HomeControllerMain::class, 'index'])->name('index');




// Pages
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('instructor', [MiscComingSoon::class, 'index'])->name('instructor');
Route::get('instructor-carousel', [PagesController::class, 'instructor_carousel'])->name('instructor-carousel');
Route::get('instructor-details', [MiscComingSoon::class, 'index'])->name('instructor-details');
Route::get('events', [MiscComingSoon::class, 'index'])->name('events');
Route::get('events-carousel', [MiscComingSoon::class, 'index'])->name('events-carousel');
Route::get('event-details', [MiscComingSoon::class, 'index'])->name('event-details');
Route::get('become-a-teacher', [PagesController::class, 'become_a_teacher'])->name('become-a-teacher');
Route::get('testimonials', [MiscComingSoon::class, 'index'])->name('testimonials');
Route::get('testimonials-carousel', [MiscComingSoon::class, 'index'])->name('testimonials-carousel');
Route::get('pricing', [MiscComingSoon::class, 'index'])->name('pricing');
Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('faq', [PagesController::class, 'faq'])->name('faq');
Route::get('course', [PagesController::class, 'course'])->name('course');
Route::get('course-carousel', [MiscComingSoon::class, 'index'])->name('course-carousel');
Route::get('course-list', [MiscComingSoon::class, 'index'])->name('course-list');
Route::get('course-details/{info}', [PagesController::class, 'course_details'])->name('course-details');
Route::get('products', [MiscComingSoon::class, 'index'])->name('products');
Route::get('product-details', [MiscComingSoon::class, 'index'])->name('product-details');
Route::get('cart', [MiscComingSoon::class, 'index'])->name('cart');
Route::get('checkout', [MiscComingSoon::class, 'index'])->name('checkout');
Route::get('wishlist', [MiscComingSoon::class, 'index'])->name('wishlist');
Route::get('sign-up', [MiscComingSoon::class, 'index'])->name('sign-up');
Route::get('login', [MiscComingSoon::class, 'index'])->name('login');
Route::get('blog', [PagesController::class, 'blog'])->name('blog');
Route::get('blog-carousel', [MiscComingSoon::class, 'index'])->name('blog-carousel');
Route::get('blog-list', [MiscComingSoon::class, 'index'])->name('blog-list');
Route::get('blog-details', [MiscComingSoon::class, 'index'])->name('blog-details');
Route::get('contact', [MiscComingSoon::class, 'index'])->name('contact');


Route::fallback([PagesController::class, 'not_found']);
