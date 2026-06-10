<?php

use App\Http\Controllers\Api\CartController;

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index']);
    Route::post('add', [CartController::class, 'add']);
    Route::post('remove', [CartController::class, 'remove']);
    Route::post('shipping', [CartController::class, 'setShipping']);
    Route::post('coupon', [CartController::class, 'applyCoupon']);
    Route::delete('coupon', [CartController::class, 'removeCoupon']);
    Route::delete('clear', [CartController::class, 'clear']);
});
