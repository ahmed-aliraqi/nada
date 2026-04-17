<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\CategoryRequest;
use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        $this->authorizeResource(Category::class, 'category');
    }

    /**
     * Display a listing of the categories.
     */
    public function index(): View
    {
        $categories = Category::filter()->latest()->paginate();

        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create(): View
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $category = Category::create($request->all());

        $category->addAllMediaFromTokens($request->image);

        flash()->success(__('categories.messages.created'));

        return redirect()->route('dashboard.categories.show', $category);
    }

    /**
     * Display the specified category.
     */
    public function show(Category $category): View
    {
        return view('dashboard.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit(Category $category): View
    {
        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified category in storage.
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->all());

        $category->addAllMediaFromTokens($request->image);

        flash()->success(__('categories.messages.updated'));

        return redirect()->route('dashboard.categories.show', $category);
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        flash()->success(__('categories.messages.deleted'));

        return redirect()->route('dashboard.categories.index');
    }

    /**
     * Display a listing of the trashed categories.
     */
    public function trashed(): View
    {
        $this->authorize('viewAnyTrash', Category::class);

        $categories = Category::onlyTrashed()->latest('deleted_at')->paginate();

        return view('dashboard.categories.trashed', compact('categories'));
    }

    /**
     * Display the specified trashed category.
     */
    public function showTrashed(Category $category): View
    {
        $this->authorize('viewTrash', $category);

        return view('dashboard.categories.show', compact('category'));
    }

    /**
     * Restore the trashed category.
     */
    public function restore(Category $category): RedirectResponse
    {
        $this->authorize('restore', $category);

        $category->restore();

        flash()->success(__('categories.messages.restored'));

        return redirect()->route('dashboard.categories.trashed');
    }

    /**
     * Force delete the specified category from storage.
     */
    public function forceDelete(Category $category): RedirectResponse
    {
        $this->authorize('forceDelete', $category);

        $category->forceDelete();

        flash()->success(__('categories.messages.deleted'));

        return redirect()->route('dashboard.categories.trashed');
    }
}
