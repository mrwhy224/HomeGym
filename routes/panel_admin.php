<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\Dashboard;
use App\Http\Controllers\post\Category;
use App\Http\Controllers\post\Comment;
use App\Http\Controllers\post\PostAdd;
use App\Http\Controllers\post\PostList;



Route::group(['prefix' => 'post','as' => 'post.'], function () {
	Route::get('/', [PostList::class, 'index'])->name('list');
	Route::get('/create', [PostAdd::class, 'index'])->name('create');
	Route::get('/comment', [Comment::class, 'index'])->name('comment');
	Route::get('/category', [Category::class, 'view'])->name('category');

});

Route::group(['prefix' => 'api','as' => 'api.'], function () {

	Route::group(['prefix' => 'category','as' => 'category.'], function () {
		Route::get('list', [Category::class, 'index'])->name('index');
	});
});

Route::get('/', [Dashboard::class, 'index'])->name('dashboard-analytics');
