<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductQuantityController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\ProductQuantity;

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
    Route::get('/user/profile', [DashboardController::class, 'profile'])
        ->name('user.profile');
    Route::get('/user/profile/edit', [RegisteredUserController::class, 'edit'])
        ->name('user.editprofile');
    Route::put('/user/profile', [RegisteredUserController::class, 'update'])
        ->name('user.updateprofile');
});


//route for pharmacy
Route::group(['middleware' => ['auth', 'role:pharmacy']], function () {
    Route::get('/pharmacy/profile', [DashboardController::class, 'profile'])
        ->name('pharmacy.profile');
    Route::get('/pharmacy/stock', [ProductQuantityController::class, 'index'])
        ->name('pharmacy.stock');
    Route::get('/pharmacy/stock/create', [ProductQuantityController::class, 'create'])
        ->name('pharmacy.stockcreate');
    Route::post('/pharmacy/stock', [ProductQuantityController::class, 'store'])
        ->name('pharmacy.stockstore');
    Route::get('/pharmacy/stock/edit/{product_id}', [ProductQuantityController::class, 'edit'])
        ->name('pharmacy.stockedit');
    Route::put('/pharmacy/stock/update/{product_id}', [ProductQuantity::class, 'update'])
        ->name('pharmacy.updatestock');
    Route::get('/pharmacy/stock/delete/{product_id}', [ProductQuantityController::class, 'destroy'])
        ->name('pharmacy.stockdelete');
    Route::get('/pharmacy/profile/edit', [RegisteredUserController::class, 'edit'])
        ->name('pharmacy.editprofile');
    Route::put('/pharmacy/profile', [RegisteredUserController::class, 'update'])
        ->name('pharmacy.updateprofile');
});

Route::resource("products", App\Http\Controllers\ProductController::class);

require __DIR__ . '/auth.php';
