<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main\HomeControllerMain;
use App\Http\Controllers\main\PagesController;



Route::get('/', [HomeControllerMain::class, 'index'])->name('index');
Route::get('/index2', [HomeControllerMain::class, 'index2'])->name('index2');
Route::get('/index3', [HomeControllerMain::class, 'index3'])->name('index3');
Route::get('/index-one-page', [HomeControllerMain::class, 'index_one_page'])->name('index-one-page');
Route::get('/index2-one-page', [HomeControllerMain::class, 'index2_one_page'])->name('index2-one-page');
Route::get('/index3-one-page', [HomeControllerMain::class, 'index3_one_page'])->name('index3-one-page');
Route::get('/index-dark', [HomeControllerMain::class, 'index_dark'])->name('index-dark');




// Pages
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('instructor', [PagesController::class, 'instructor'])->name('instructor');
Route::get('instructor-carousel', [PagesController::class, 'instructor_carousel'])->name('instructor-carousel');
Route::get('instructor-details', [PagesController::class, 'instructor_details'])->name('instructor-details');
Route::get('events', [PagesController::class, 'events'])->name('events');
Route::get('events-carousel', [PagesController::class, 'events_carousel'])->name('events-carousel');
Route::get('event-details', [PagesController::class, 'event_details'])->name('event-details');
Route::get('become-a-teacher', [PagesController::class, 'become_a_teacher'])->name('become-a-teacher');
Route::get('testimonials', [PagesController::class, 'testimonials'])->name('testimonials');
Route::get('testimonials-carousel', [PagesController::class, 'testimonials_carousel'])->name('testimonials-carousel');
Route::get('pricing', [PagesController::class, 'pricing'])->name('pricing');
Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('faq', [PagesController::class, 'faq'])->name('faq');
Route::get('course', [PagesController::class, 'course'])->name('course');
Route::get('course-carousel', [PagesController::class, 'course_carousel'])->name('course-carousel');
Route::get('course-list', [PagesController::class, 'course_list'])->name('course-list');
Route::get('course-details', [PagesController::class, 'course_details'])->name('course-details');
Route::get('products', [PagesController::class, 'products'])->name('products');
Route::get('product-details', [PagesController::class, 'product_details'])->name('product-details');
Route::get('cart', [PagesController::class, 'cart'])->name('cart');
Route::get('checkout', [PagesController::class, 'checkout'])->name('checkout');
Route::get('wishlist', [PagesController::class, 'wishlist'])->name('wishlist');
Route::get('sign-up', [PagesController::class, 'sign_up'])->name('sign-up');
Route::get('login', [PagesController::class, 'login'])->name('login');
Route::get('blog', [PagesController::class, 'blog'])->name('blog');
Route::get('blog-carousel', [PagesController::class, 'blog_carousel'])->name('blog-carousel');
Route::get('blog-list', [PagesController::class, 'blog_list'])->name('blog-list');
Route::get('blog-details', [PagesController::class, 'blog_details'])->name('blog-details');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');


Route::fallback([PagesController::class, 'not_found']);