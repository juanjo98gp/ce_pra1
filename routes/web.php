<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

# Home
Route::get('/', [HomeController::class, 'index'])->name('welcome');
# Category
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category');
# Product
Route::get('/category/{category_id}/product/{id}', [ProductController::class, 'show'])->name('product');
# Cart
Route::get('/cart', [CartController::class, 'show'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('remove');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('clear');
Route::post('/cart/update', [CartController::class, 'update_quantity'])->name('update');
# Checkout (cómo no hay túnel de pago llamaremos a esta parte "CheckoutTunnel")
Route::get('/checkout_tunnel', [CheckoutController::class, 'show'])->name('checkout-tunnel');
Route::post('/checkout_tunnel/login', [CheckoutController::class, 'login'])->name('checkout-login');
Route::post('/checkout_tunnel/guest', [CheckoutController::class, 'guest'])->name('checkout-guest');
Route::post('/checkout_tunnel/sale', [CheckoutController::class, 'create_sale'])->name('checkout-sale');
Route::get('/checkout', [CheckoutController::class, 'show_checkout'])->name('checkout');
#Route::get('/c')

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
