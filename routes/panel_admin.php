<?php

use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\Plans;
use App\Http\Controllers\admin\post\Category;
use App\Http\Controllers\admin\post\Comment;
use App\Http\Controllers\admin\post\PostAdd;
use App\Http\Controllers\admin\post\PostList;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'post','as' => 'post.'], function () {
	Route::get('/', [PostList::class, 'index'])->name('list');
	Route::get('/create', [PostAdd::class, 'index'])->name('create');
	Route::get('/comment', [Comment::class, 'index'])->name('comment');
	Route::get('/category', [Category::class, 'view'])->name('category');

});
Route::group(['prefix' => 'customer','as' => 'customer.'], function () {
	Route::get('plan', [Plans::class, 'index'])->name('plan');
	Route::get('list', function () {
		return view('content.admin.users.customer');
	})->name('list');
});


Route::group(['prefix' => 'api','as' => 'api.'], function () {

	Route::group(['prefix' => 'category','as' => 'category.'], function () {
		Route::get('list', [Category::class, 'index'])->name('index');
	});

	Route::group(['prefix' => 'customer','as' => 'customer.'], function () {
		Route::get('plan', [Plans::class, 'customers'])->name('plan');

	});

});
