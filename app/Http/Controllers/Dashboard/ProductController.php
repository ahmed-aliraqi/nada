<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        $this->authorizeResource(Product::class, 'product');
    }

    /**
     * Display a listing of the products.
     */
    public function index(): View
    {
        $products = Product::filter()->with('category')->latest()->paginate();

        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create(): View
    {
        $categories = Category::all()->pluck('name', 'id');

        return view('dashboard.products.create', compact('categories'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        $product = Product::create($request->all());

        flash()->success(__('products.messages.created'));

        return redirect()->route('dashboard.products.show', $product);
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product): View
    {
        $product->load('category');

        return view('dashboard.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product): View
    {
        $categories = Category::all()->pluck('name', 'id');

        return view('dashboard.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(
        ProductRequest $request,
        Product $product
    ): RedirectResponse {
        $product->update($request->all());

        flash()->success(__('products.messages.updated'));

        return redirect()->route('dashboard.products.show', $product);
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        flash()->success(__('products.messages.deleted'));

        return redirect()->route('dashboard.products.index');
    }

    /**
     * Display a listing of the trashed products.
     */
    public function trashed(): View
    {
        $this->authorize('viewAnyTrash', Product::class);

        $products = Product::onlyTrashed()->latest('deleted_at')->paginate();

        return view('dashboard.products.trashed', compact('products'));
    }

    /**
     * Display the specified trashed product.
     */
    public function showTrashed(Product $product): View
    {
        $this->authorize('viewTrash', $product);

        return view('dashboard.products.show', compact('product'));
    }

    /**
     * Restore the trashed product.
     */
    public function restore(Product $product): RedirectResponse
    {
        $this->authorize('restore', $product);

        $product->restore();

        flash()->success(__('products.messages.restored'));

        return redirect()->route('dashboard.products.trashed');
    }

    /**
     * Force delete the specified product from storage.
     */
    public function forceDelete(Product $product): RedirectResponse
    {
        $this->authorize('forceDelete', $product);

        $product->forceDelete();

        flash()->success(__('products.messages.deleted'));

        return redirect()->route('dashboard.products.trashed');
    }
}
