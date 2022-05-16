<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

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
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
        ->name('dashboard');
});
// For profiles
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@profile')
        ->name('dashboard.profile');
});
//route for orders
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/dashboard/myorders', 'App\Http\Controllers\DashboardController@orders')
        ->name('dashboard.orders');
});
//route for stock
Route::group(['middleware' => ['auth', 'role:pharmacy']], function () {
    Route::get('/dashboard/myorders', 'App\Http\Controllers\DashboardController@stock')
        ->name('dashboard.stock');
});





require __DIR__ . '/auth.php';

Route::resource("products", App\Http\Controllers\ProductController::class);
