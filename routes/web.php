<?php

use App\Http\Controllers\Admin\AdminCustomerController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// ---------------------------------------- PRODUCTS -----------------------------------------------
Route::get('/', [HomeController::class, 'index']);
Route::get('/categories/{slug}', [ProductController::class, 'category'])->name('products.category');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/login', fn() => Inertia\Inertia::render('Auth/Login'))->name('login');

// ---------------------------------------- ADMIN -----------------------------------------------
Route::prefix('admin')
    // ->middleware(['auth', 'is_admin'])
    ->name('admin.')
    ->group(function () {
        Route::resource('products', AdminProductController::class);
        Route::resource('orders', AdminOrderController::class)->only(['index', 'show']);
        Route::resource('customers', AdminCustomerController::class)->only(['index', 'show']);
        Route::get('dashboard', fn() => Inertia\Inertia::render('Admin/Dashboard'));
    });


