<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('layouts.admin_layout');
});
Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/rocker', function () {
    return view('layouts.rocker');
});

//select action
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('products.show');
//execute action
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route::resource('/products', ProductController::class);

// select action for categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::get('/categories/show/{id}', [CategoryController::class, 'show']);
//execute action for categories
Route::post('/categories', [CategoryController::class, 'store']);
Route::put('/categories/update/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/destroy/{id}', [CategoryController::class, 'destroy']);

// Route::resource('/categories', CategoryController::class);
