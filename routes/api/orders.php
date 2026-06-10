<?php

use App\Http\Controllers\Api\OrderController;

Route::prefix('orders')->group(function () {
    Route::post('/', [OrderController::class, 'store']);
});
