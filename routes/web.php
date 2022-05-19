<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('house');


//route for client
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/user/orders', [DashboardController::class, 'orders'])
        ->name('user.orders');
    Route::get('/user/profile/edit', [RegisteredUserController::class, 'edit'])
        ->name('user.editprofile');
    Route::get('/user/profile', [DashboardController::class, 'profile'])
        ->name('user.profile');
    Route::put('/user/profile', [RegisteredUserController::class, 'update'])
        ->name('user.updateprofile');
});


//route for pharmacy
Route::group(['middleware' => ['auth', 'role:pharmacy']], function () {
    Route::get('/pharmacy/profile', [DashboardController::class, 'profile'])
        ->name('pharmacy.profile');
    Route::get('/pharmacy/stock', [DashboardController::class, 'stock'])
        ->name('pharmacy.stock');
    Route::get('/pharmacy/profile/edit', [RegisteredUserController::class, 'edit'])
        ->name('pharmacy.editprofile');
});

Route::resource("products", App\Http\Controllers\ProductController::class);

require __DIR__ . '/auth.php';
