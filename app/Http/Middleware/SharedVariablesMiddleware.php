<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class SharedVariablesMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        View::composer([
            'web.home',
        ], function ($view) use ($request) {
            $view->with([
                'productsCount' => Cache::remember('products_count', now()->hours(2), function () {
                    return Product::count();
                }),
                'customersCount' => Cache::remember('customers_count', now()->hours(2), function () {
                    return Customer::count();
                }),
                'categories' => Cache::remember('categories', now()->hours(2), function () {
                    return Category::all();
                }),
            ]);
        });

        return $next($request);
    }
}
