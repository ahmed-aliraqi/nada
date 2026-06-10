<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Support\CartManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'token'          => 'required|string',
            'full_name'      => 'required|string|max:255',
            'phone'          => 'required|string|max:30',
            'email'          => 'nullable|email|max:255',
            'address'        => 'required|string',
            'delivery_notes' => 'nullable|string',
            'shipping_price' => 'required|numeric|min:0',
        ]);

        $cart = app(CartManager::class)
            ->fromToken($request->input('token'))
            ->setShippingPrice((float) $request->input('shipping_price'));

        if (empty($cart->getItems())) {
            return response()->json(['message' => __('orders.empty_cart')], 422);
        }

        $order = Order::create([
            'full_name'      => $request->input('full_name'),
            'phone'          => $request->input('phone'),
            'email'          => $request->input('email'),
            'address'        => $request->input('address'),
            'delivery_notes' => $request->input('delivery_notes'),
            'subtotal'       => $cart->getSubtotal(),
            'shipping_price' => $cart->getShippingPrice(),
            'discount'       => $cart->getDiscount(),
            'total'          => $cart->getTotal(),
        ]);

        foreach ($cart->getItems() as $item) {
            $order->products()->create([
                'product_id' => $item->getId(),
                'name'       => $item->getName(),
                'quantity'   => $item->getQuantity(),
                'price'      => $item->getPrice(),
                'total'      => $item->getTotalPrice(),
            ]);
        }

        $order->statuses()->create(['status' => OrderStatus::PENDING]);

        $clearedCart = app(CartManager::class)->clear()->get();

        return response()->json([
            'order_id' => $order->id,
            'message'  => __('orders.placed_successfully'),
            'cart'     => $clearedCart,
        ]);
    }
}
