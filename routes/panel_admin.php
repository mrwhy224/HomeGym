<?php

use App\Http\Controllers\admin\classes\BookingController;
use App\Http\Controllers\admin\classes\PackageController;
use App\Http\Controllers\admin\classes\ServiceController;
use App\Http\Controllers\admin\CoachController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\FinancialController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\post\Category;
use App\Http\Controllers\admin\post\Comment;
use App\Http\Controllers\admin\post\PostAdd;
use App\Http\Controllers\admin\post\PostList;
use App\Http\Controllers\admin\SettingController;
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
Route::group(['prefix' => 'coach','as' => 'coach.'], function () {
	Route::get('list', [CoachController::class, 'index'])->name('list');
});
Route::get('role', function () {
	return view('content.admin.users.role');
})->name('role');

Route::group(['prefix' => 'booking','as' => 'booking.'], function () {
	Route::get('', [BookingController::class, 'index'])->name('list');
	Route::get('process/{id}', [BookingController::class, 'process'])->name('process');
	Route::get('calendar', [BookingController::class, 'calendar'])->name('calendar');
});

Route::group(['prefix' => 'classes','as' => 'classes.'], function () {
	Route::get('', [ServiceController::class, 'index'])->name('list');
	Route::get('create', [ServiceController::class, 'create'])->name('create');
	Route::get('attendance/{activity}', [ServiceController::class, 'attendance'])->name('attendance');
	Route::get('details/{activity}', [ServiceController::class, 'show'])->name('show');
	Route::get('package', [PackageController::class, 'getPage'])->name('package');
});

Route::group(['prefix' => 'message','as' => 'message.'], function () {
	Route::get('monitoring', [MessageController::class, 'monitoring'])->name('monitoring');
	Route::get('support', [MessageController::class, 'support'])->name('support');
});

Route::group(['prefix' => 'finance','as' => 'finance.'], function () {
	Route::get('payout', [FinancialController::class, 'payout'])->name('payout');
	Route::get('transaction', [FinancialController::class, 'transaction'])->name('transaction');
	Route::get('invoice', [FinancialController::class, 'invoice'])->name('invoice');
	Route::get('wallet', [FinancialController::class, 'wallet'])->name('wallet');
});

Route::group(['prefix' => 'setting','as' => 'setting.'], function () {
	Route::get('general', [SettingController::class, 'general'])->name('general');
	Route::get('language', [SettingController::class, 'language'])->name('language');
	Route::get('currency', [SettingController::class, 'currency'])->name('currency');
	Route::get('payment', [SettingController::class, 'payment'])->name('payment');

	Route::get('profile', [SettingController::class, 'profile'])->name('profile');
});

Route::group(['prefix' => 'system','as' => 'system.'], function () {
	Route::get('log', [SettingController::class, 'log'])->name('log');
	Route::get('backup', [SettingController::class, 'backup'])->name('backup');
});

Route::group(['prefix' => 'api','as' => 'api.'], function () {

	Route::group(['prefix' => 'category','as' => 'category.'], function () {
		Route::get('list', [Category::class, 'index'])->name('index');
	});
	Route::group(['prefix' => 'classes','as' => 'classes.'], function () {
		Route::post('process/{id}/approve', [BookingController::class, 'approve'])->name('approve');
		Route::get('getHeatmapData/{id}', [BookingController::class, 'getHeatmapData'])->name('getHeatmapData');
	});
	Route::get('users/search', [CustomerController::class, 'search'])->name('users.search');
	Route::post('users/recharge', [CustomerController::class, 'recharge'])->name('users.recharge');
	Route::post('book/{activity}', [BookingController::class, 'enrollUser'])->name('book');

	Route::group(['prefix' => 'customer','as' => 'customer.'], function () {
		Route::get('list', [CustomerController::class, 'customers'])->name('list');
	});
	Route::group(['prefix' => 'coach','as' => 'coach.'], function () {
		Route::get('list', [CoachController::class, 'coaches'])->name('list');
		Route::post('create', [CoachController::class, 'store'])->name('create');
	});

	Route::group(['prefix' => 'package','as' => 'package.'], function () {
		Route::get('list', [PackageController::class, 'index'])->name('index');
		Route::post('create', [PackageController::class, 'store'])->name('create');
		Route::post('update/{id}', [PackageController::class, 'update'])->name('update');
		Route::delete('delete/{package}', [PackageController::class, 'remove'])->name('delete');
	});
});

