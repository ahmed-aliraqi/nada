<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $products = Product::filter()->paginate()->withQueryString();

        $allProductsCount = Product::count();

        $categories = Category::query()->withCount('products')->get();

        $updateQueryParams = function(array $params = []): string
        {
            $query = request()->query();

            foreach (['category', 'sort'] as $key) {
                if (array_key_exists($key, $params)) {

                    if ($params[$key] === null) {
                        unset($query[$key]);
                    } else {
                        $query[$key] = $params[$key];
                    }
                }
            }

            $newQuery = http_build_query($query);

            return url()->current() . ($newQuery ? '?' . $newQuery : '');
        };

        return view('web.products.index', compact('products', 'categories', 'allProductsCount', 'updateQueryParams'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('web.products.show', compact('product'));
    }
}
