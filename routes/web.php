<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Admin Panel
Route::prefix('admin')->group(function() {

    // Dashboard

    // Products CRUD
    Route::get('/products', function () {
        return view('admin.products');
    })->name('admin.products');

    // Orders Management
    Route::get('/orders', function () {
        return view('admin.orders');
    })->name('admin.orders');

    // Users Management
    Route::get('/users', function () {
        return view('admin.users');
    })->name('admin.users');

    // Coupons / Discounts
    Route::get('/coupons', function () {
        return view('admin.coupons');
    })->name('admin.coupons');

});
// Customer Website
Route::get('/', function() {
    return view('index'); // Home Page
})->name('home');

Route::get('/shop', function() {
    return view('browse'); // Shop / Browse Page
})->name('shop');

Route::get('/product/{id}', function($id) {
    return view('product', ['id' => $id]); // Product Details
})->name('product');

Route::get('/cart', function() {
    return view('cart'); // Cart Page
})->name('cart');

Route::get('/checkout', function() {
    return view('checkout'); // Checkout Page
})->name('checkout');

Route::get('/login', function() {
    return view('auth'); // Login / Signup
})->name('login');

 Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');

