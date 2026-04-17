<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\SelectResource;
use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the categories.
     */
    public function index(): AnonymousResourceCollection
    {
        $categories = Category::filter()->simplePaginate();

        return CategoryResource::collection($categories);
    }

    /**
     * Display the specified category.
     */
    public function show(Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }

    /**
     * Display a listing of the categories.
     */
    public function select(): AnonymousResourceCollection
    {
        $categories = Category::filter()->simplePaginate();

        return SelectResource::collection($categories);
    }
}
