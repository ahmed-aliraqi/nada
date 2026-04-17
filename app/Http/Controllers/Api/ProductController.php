<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProductResource;
use App\Http\Resources\SelectResource;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the products.
     */
    public function index(): AnonymousResourceCollection
    {
        $products = Product::filter()->simplePaginate();

        return ProductResource::collection($products);
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product): ProductResource
    {
        return new ProductResource($product);
    }

    /**
     * Display a listing of the products.
     */
    public function select(): AnonymousResourceCollection
    {
        $products = Product::filter()->simplePaginate();

        return SelectResource::collection($products);
    }
}
