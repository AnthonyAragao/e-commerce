<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminProductController;

use Illuminate\Support\Facades\Route;


// ---------------------------------------- PRODUCTS -----------------------------------------------
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');


// ---------------------------------------- ADMIN -----------------------------------------------
Route::prefix('admin')
    // ->middleware(['auth', 'is_admin'])
    ->name('admin.')
    ->group(function () {
        Route::resource('products', AdminProductController::class);
        Route::get('dashboard', fn() => Inertia\Inertia::render('Admin/Dashboard'));
    });


