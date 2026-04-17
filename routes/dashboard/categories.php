<?php

use App\Http\Controllers\Dashboard\CategoryController;

Route::get('trashed/categories', [CategoryController::class, 'trashed'])->name('categories.trashed');
Route::get('trashed/categories/{trashed_category}', [CategoryController::class, 'showTrashed'])->name('categories.trashed.show');
Route::post('categories/{trashed_category}/restore', [CategoryController::class, 'restore'])->name('categories.restore');
Route::delete('categories/{trashed_category}/forceDelete', [CategoryController::class, 'forceDelete'])->name('categories.forceDelete');
Route::resource('categories', CategoryController::class);
