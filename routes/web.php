<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductQuantityController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ReserveController;
use App\Models\OrderItem;

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

//->middleware('auth')
//route for client
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/user/profile', [DashboardController::class, 'profile'])
        ->name('user.profile');
    Route::get('/user/profile/edit', [RegisteredUserController::class, 'edit'])
        ->name('user.editprofile');
    Route::put('/user/profile', [RegisteredUserController::class, 'update'])
        ->name('user.updateprofile');
    Route::get('/reserve/create/{id}', [ReserveController::class, 'create'])->middleware('auth', 'role:user');
    Route::post('/reserve/{id}', [ReserveController::class, 'store'])
        ->name('store.reserve');
    Route::get('/reserve/delete/{id}', [ReserveController::class, 'destroy'])
        ->name('reserve.delete');
    Route::get('/commande/create/{id}', [OrderItemController::class, 'create'])->middleware('auth', 'role:user');
    Route::post('/commande/{id}', [OrderItemController::class, 'store'])
        ->name('store.commande');
    Route::get('/commande/delete/{id}', [OderItemController::class, 'destroy'])
        ->name('commande.delete');
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
    Route::put('/pharmacy/stock/update/{product_id}', [ProductQuantityController::class, 'update'])
        ->name('pharmacy.updatestock');
    Route::get('/pharmacy/stock/delete/{product_id}', [ProductQuantityController::class, 'destroy'])
        ->name('pharmacy.stockdelete');
    Route::get('/pharmacy/profile/edit', [RegisteredUserController::class, 'edit'])
        ->name('pharmacy.editprofile');
    Route::put('/pharmacy/profile', [RegisteredUserController::class, 'update'])
        ->name('pharmacy.updateprofile');
    Route::get('/pharmacy/reservation', [ReserveController::class, 'show'])
        ->name('pharmacy.reservation');
    Route::get('/pharmacy/commande', [OrderItemController::class, 'show'])
        ->name('pharmacy.commande');
    Route::get('/pharmacy/commande/accepte/{id}', [OrderItemController::class, 'accepte']);
    Route::get('/pharmacy/commande/refuse/{id}', [OrderItemController::class, 'refuse']);
});

Route::resource("products", ProductController::class);
Route::get('get-result', [ProductController::class, 'getResult'])->name('get-result');

require __DIR__ . '/auth.php';
