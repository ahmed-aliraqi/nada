<?php

use App\Http\Controllers\Dashboard\ProductController;

Route::get('trashed/products', [ProductController::class, 'trashed'])->name('products.trashed');
Route::get('trashed/products/{trashed_product}', [ProductController::class, 'showTrashed'])->name('products.trashed.show');
Route::post('products/{trashed_product}/restore', [ProductController::class, 'restore'])->name('products.restore');
Route::delete('products/{trashed_product}/forceDelete', [ProductController::class, 'forceDelete'])->name('products.forceDelete');
Route::resource('products', ProductController::class);