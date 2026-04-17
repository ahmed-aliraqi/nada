<?php

use App\Http\Controllers\Api\CategoryController;

Route::apiResource('categories', CategoryController::class);
Route::get('/select/categories', [CategoryController::class, 'select'])->name('categories.select');
