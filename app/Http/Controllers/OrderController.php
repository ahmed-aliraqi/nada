<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cart()
    {
        return view('web.orders.cart');
    }

    public function track(Request $request)
    {
        $orders = null;
        $search = null;

        if ($request->filled('search')) {
            $search = $request->input('search');

            $orders = Order::with(['latestStatus', 'products.product.media'])
                ->where('email', $search)
                ->orWhere('phone', $search)
                ->orderByDesc('created_at')
                ->get();
        }

        return view('web.orders.track', compact('orders', 'search'));
    }

    public function show(Product $product)
    {
        return view('web.products.show', compact('product'));
    }
}
