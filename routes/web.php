<?php
namespace App\Http\Controllers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CouponsController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/shop', function () {
    return view('browse');
})->name('shop');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::get('/product_form', function () {
    return view('create_product');
});

Route::get('/catagory_form', function () {
    return view('catagory_product');
});

Route::get('/order_form', function () {
    return view('order_product');
});
Route::get('/coupons_form', function () {
    return view('coupons');
});
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);

Route::resource('coupons', CouponsController::class);



