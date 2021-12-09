<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    HomeController,
    ProductController,
    CheckoutController,
    CartController,
};
use App\Http\Controllers\admin\{
    DashboardController,
    UserController,
    ProductController as AdminProductController,
};

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');
Route::get('/shop/{product}', [ProductController::class, 'show'])->name('shop.show');
Route::get('/cart', [CartController::class, 'index'])->name('cart');


Route::middleware(['auth'])->group(function () {

    Route::middleware(['AdminAuth'])
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('/users', [UserController::class, 'index'])->name('users.index');
            Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
            Route::get('/products', [AdminProductController::class, 'index'])->name('products.index');
            Route::get('/products/{product}', [AdminProductController::class, 'show'])->name('products.show');
        });

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

});
