<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

foreach (glob(__DIR__.'/web/*.php') as $routes) {
    include $routes;
}

Route::prefix('dashboard')
    ->middleware('dashboard')
    ->as('dashboard.')
    ->group(function () {
        foreach (glob(__DIR__.'/dashboard/*.php') as $routes) {
            include $routes;
        }
    });

Route::prefix(LaravelLocalization::setLocale())
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->group(function () {
        Route::get('cart', [OrderController::class, 'cart'])->name('orders.cart');
        Route::get('shop', [ProductController::class, 'index'])->name('products.index');
        Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

        $views = collect(glob(resource_path('views/web/*.blade.php')))->map(function ($path) {
            return str($path)->classBasename()->replaceLast('.blade.php', '')->toString();
        })->unique()->values()->toArray();

        Route::get('{view?}', WebController::class)->name('web.view')->whereIn('view', $views);
    });
