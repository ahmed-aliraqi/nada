<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laraeast\LaravelSettings\Facades\Settings;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any categories.
     */
    public function viewAny(User $user): bool
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.categories');
    }

    /**
     * Determine whether the user can view the category.
     */
    public function view(User $user, Category $category): bool
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.categories');
    }

    /**
     * Determine whether the user can create categories.
     */
    public function create(User $user): bool
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.categories');
    }

    /**
     * Determine whether the user can update the category.
     */
    public function update(User $user, Category $category): bool
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.categories'))
            && ! $this->trashed($category);
    }

    /**
     * Determine whether the user can delete the category.
     */
    public function delete(User $user, Category $category): bool
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.categories'))
            && ! $this->trashed($category);
    }

    /**
     * Determine whether the user can view trashed categories.
     */
    public function viewAnyTrash(User $user): bool
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.categories'))
            && $this->hasSoftDeletes();
    }

    /**
     * Determine whether the user can view the trashed category.
     */
    public function viewTrash(User $user, Category $category): bool
    {
        return $this->view($user, $category) && $category->trashed();
    }

    /**
     * Determine whether the user can restore the category.
     */
    public function restore(User $user, Category $category): bool
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.categories'))
            && $this->trashed($category);
    }

    /**
     * Determine whether the user can permanently delete the category.
     */
    public function forceDelete(User $user, Category $category): bool
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.categories'))
            && $this->trashed($category)
            && Settings::get('delete_forever');
    }

    /**
     * Determine wither the given category is trashed.
     */
    public function trashed(Category $category): bool
    {
        return $this->hasSoftDeletes() && method_exists($category, 'trashed') && $category->trashed();
    }

    /**
     * Determine wither the category use soft deleting trait.
     */
    public function hasSoftDeletes(): bool
    {
        return in_array(
            SoftDeletes::class,
            array_keys((new \ReflectionClass(Category::class))->getTraits())
        );
    }
}
