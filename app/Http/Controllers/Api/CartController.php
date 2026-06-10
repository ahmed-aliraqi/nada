<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Support\CartManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $token = $request->query('token', $request->header('x-cart-token'));

        return response()->json(
            app(CartManager::class)
                ->fromToken($token)
                ->get()
        );
    }

    public function add(Request $request): JsonResponse
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'integer|min:1',
        ]);

        $token = $request->input('token', $request->header('x-cart-token'));

        return response()->json(
            app(CartManager::class)
                ->fromToken($token)
                ->addItem(
                    productId: $request->input('product_id'),
                    quantity: (int) $request->input('quantity'),
                )
                ->get()
        );
    }

    public function remove(Request $request): JsonResponse
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $token = $request->input('token', $request->header('x-cart-token'));

        return response()->json(
            app(CartManager::class)
                ->fromToken($token)
                ->removeItem(productId: $request->input('product_id'))
                ->get()
        );
    }

    public function applyCoupon(Request $request): JsonResponse
    {
        //TODO: apply coupon

        return response()->json([]);
    }

    public function removeCoupon(Request $request): JsonResponse
    {
        $token = $request->input('token', $request->header('x-cart-token'));

        return response()->json(
            app(CartManager::class)
                ->fromToken($token)
                ->clearCoupon()
                ->get()
        );
    }

    public function clear(Request $request): JsonResponse
    {
        $token = $request->input('token', $request->header('x-cart-token'));

        return response()->json(
            app(CartManager::class)
                ->fromToken($token)
                ->clear()
                ->get()
        );
    }
}
