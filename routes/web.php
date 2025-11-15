<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main\HomeControllerMain;
use App\Http\Controllers\main\PagesController;



Route::get('/', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index2', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index3', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index-one-page', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index2-one-page', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index3-one-page', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index-dark', [HomeControllerMain::class, 'index'])->name('index');




// Pages
Route::get('about', [HomeControllerMain::class, 'index'])->name('about');
Route::get('instructor', [HomeControllerMain::class, 'index'])->name('instructor');
Route::get('instructor-carousel', [HomeControllerMain::class, 'index'])->name('instructor-carousel');
Route::get('instructor-details', [HomeControllerMain::class, 'index'])->name('instructor-details');
Route::get('events', [HomeControllerMain::class, 'index'])->name('events');
Route::get('events-carousel', [HomeControllerMain::class, 'index'])->name('events-carousel');
Route::get('event-details', [HomeControllerMain::class, 'index'])->name('event-details');
Route::get('become-a-teacher', [HomeControllerMain::class, 'index'])->name('become-a-teacher');
Route::get('testimonials', [HomeControllerMain::class, 'index'])->name('testimonials');
Route::get('testimonials-carousel', [HomeControllerMain::class, 'index'])->name('testimonials-carousel');
Route::get('pricing', [HomeControllerMain::class, 'index'])->name('pricing');
Route::get('gallery', [HomeControllerMain::class, 'index'])->name('gallery');
Route::get('faq', [HomeControllerMain::class, 'index'])->name('faq');
Route::get('course', [HomeControllerMain::class, 'index'])->name('course');
Route::get('course-carousel', [HomeControllerMain::class, 'index'])->name('course-carousel');
Route::get('course-list', [HomeControllerMain::class, 'index'])->name('course-list');
Route::get('course-details', [HomeControllerMain::class, 'index'])->name('course-details');
Route::get('products', [HomeControllerMain::class, 'index'])->name('products');
Route::get('product-details', [HomeControllerMain::class, 'index'])->name('product-details');
Route::get('cart', [HomeControllerMain::class, 'index'])->name('cart');
Route::get('checkout', [HomeControllerMain::class, 'index'])->name('checkout');
Route::get('wishlist', [HomeControllerMain::class, 'index'])->name('wishlist');
Route::get('sign-up', [HomeControllerMain::class, 'index'])->name('sign-up');
Route::get('login', [HomeControllerMain::class, 'index'])->name('login');
Route::get('blog', [HomeControllerMain::class, 'index'])->name('blog');
Route::get('blog-carousel', [HomeControllerMain::class, 'index'])->name('blog-carousel');
Route::get('blog-list', [HomeControllerMain::class, 'index'])->name('blog-list');
Route::get('blog-details', [HomeControllerMain::class, 'index'])->name('blog-details');
Route::get('contact', [HomeControllerMain::class, 'index'])->name('contact');


Route::fallback([PagesController::class, 'not_found']);
