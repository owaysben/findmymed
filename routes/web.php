<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\User\UserEditProfileComponent;

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

//auth route for both
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
});
// For profiles
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])
        ->name('dashboard.profile');
});
//route for orders
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/dashboard/myorders', [DashboardController::class, 'orders'])
        ->name('dashboard.orders');
});
//route for stock
Route::group(['middleware' => ['auth', 'role:pharmacy']], function () {
    Route::get('/dashboard/stock', [DashboardController::class, 'stock'])
        ->name('dashboard.stock');
});

Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/profile/edit', [UserEditProfileComponent::class])->name('user.editprofile');
});





require __DIR__ . '/auth.php';

Route::resource("products", App\Http\Controllers\ProductController::class);
