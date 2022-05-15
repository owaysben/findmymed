<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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
    Route::get('/dashboard/myprofile', [DashboardController::class, 'profile'])
        ->name('dashboard.profile');
});
//route for orders
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/dashboard/myorders', [DashboardController::class, 'orders'])
        ->name('dashboard.orders');
});
require __DIR__ . '/auth.php';

Route::resource("products", App\Http\Controllers\ProductController::class);
