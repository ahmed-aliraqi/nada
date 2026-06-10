<?php

use App\Http\Controllers\Dashboard\OrderController;

Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::patch('orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.status');
