<?php

use App\Http\Controllers\Api\ProductController;

Route::apiResource('products', ProductController::class);
Route::get('/select/products', [ProductController::class, 'select'])->name('products.select');