<?php

use App\Http\Controllers\Dashboard\UiController;

// Frontend
Route::get('ui/{group}/sections/{section?}', [UiController::class, 'index'])->name('ui.index');
Route::get('ui/{group}/sections/{section}/{id}', [UiController::class, 'edit'])->name('ui.edit');
Route::post('ui/{group}/sections/{section}/{id?}', [UiController::class, 'store'])->name('ui.store');
Route::delete('ui/{group}/sections/{section}/{id}', [UiController::class, 'destroy'])->name('ui.destroy');
