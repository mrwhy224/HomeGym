<?php

use App\Http\Controllers\admin\classes\PackageController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\post\Category;
use App\Http\Controllers\admin\post\Comment;
use App\Http\Controllers\admin\post\PostAdd;
use App\Http\Controllers\admin\post\PostList;
use App\Models\Coach;
use App\Models\Package;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'post','as' => 'post.'], function () {
	Route::get('/', [PostList::class, 'index'])->name('list');
	Route::get('/create', [PostAdd::class, 'index'])->name('create');
	Route::get('/comment', [Comment::class, 'index'])->name('comment');
	Route::get('/category', [Category::class, 'view'])->name('category');

});
Route::group(['prefix' => 'customer','as' => 'customer.'], function () {
	Route::get('plan', [CustomerController::class, 'plan'])->name('plan');
	Route::get('list', function () {
		return view('content.admin.users.customer');
	})->name('list');
});

Route::group(['prefix' => 'classes','as' => 'classes.'], function () {

	Route::get('package', [PackageController::class, 'getPage'])->name('package');
	Route::get('list', function () {
		return view('content.admin.classes.create', ['packages'=>Package::all(), 'coaches'=>Coach::all()]);
	})->name('list');


});


Route::group(['prefix' => 'api','as' => 'api.'], function () {

	Route::group(['prefix' => 'category','as' => 'category.'], function () {
		Route::get('list', [Category::class, 'index'])->name('index');
	});

	Route::group(['prefix' => 'customer','as' => 'customer.'], function () {
		Route::get('list', [CustomerController::class, 'customers'])->name('list');
	});

	Route::group(['prefix' => 'package','as' => 'package.'], function () {
		Route::get('list', [PackageController::class, 'index'])->name('index');
		Route::post('create', [PackageController::class, 'store'])->name('create');
		Route::delete('delete/{package}', [PackageController::class, 'remove'])->name('delete');
	});
});
