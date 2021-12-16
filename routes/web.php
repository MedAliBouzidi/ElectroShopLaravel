<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    HomeController,
    ProductController,
    CheckoutController,
    CartController,
    UserProfileController
};
use App\Http\Controllers\admin\{
    DashboardController,
    UserController,
    ProductController as AdminProductController,
    CartController as AdminCartController
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

    Route::prefix('admin')->name('admin.')
        ->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

            Route::get('/users', [UserController::class, 'index'])->name('users.index');
            Route::get('/users/destroy/{user}', [UserController::class, 'destroy'])->name('users.destroy');
            Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

            Route::get('/products', [AdminProductController::class, 'index'])->name('products.index');
            Route::get('/products/create', [AdminProductController::class, 'create'])->name('products.create');
            Route::post('/products/store', [AdminProductController::class, 'store'])->name('products.store');
            Route::get('/products/destroy/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');
            Route::get('/products/{product}', [AdminProductController::class, 'show'])->name('products.show');

            Route::get('/commands', [AdminCartController::class, 'index'])->name('commands.index');
            Route::get('/commands/destroy/{command}', [AdminCartController::class, 'destroy'])->name('commands.destroy');
            Route::get('/commands/{command}', [AdminCartController::class, 'show'])->name('commands.show');


        });
    Route::post('/commands/store/{product}', [CartController::class, 'store'])->name('commands.store');
    Route::get('/commands/destroy/{command}', [CartController::class, 'destroy'])->name('commands.destroy');

    Route::get('/user/profile', [UserProfileController::class, 'index'])->name('users.profile.index');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout'); // undone

});
