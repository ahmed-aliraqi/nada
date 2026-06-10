<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Support\CartManager;

class OrderController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function cart()
    {
        return view('web.orders.cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('web.products.show', compact('product'));
    }
}
