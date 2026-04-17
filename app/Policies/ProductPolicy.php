<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laraeast\LaravelSettings\Facades\Settings;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any products.
     */
    public function viewAny(User $user): bool
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.products');
    }

    /**
     * Determine whether the user can view the product.
     */
    public function view(User $user, Product $product): bool
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.products');
    }

    /**
     * Determine whether the user can create products.
     */
    public function create(User $user): bool
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.products');
    }

    /**
     * Determine whether the user can update the product.
     */
    public function update(User $user, Product $product): bool
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.products'))
            && ! $this->trashed($product);
    }

    /**
     * Determine whether the user can delete the product.
     */
    public function delete(User $user, Product $product): bool
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.products'))
            && ! $this->trashed($product);
    }

    /**
     * Determine whether the user can view trashed products.
     */
    public function viewAnyTrash(User $user): bool
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.products'))
            && $this->hasSoftDeletes();
    }

    /**
     * Determine whether the user can view the trashed product.
     */
    public function viewTrash(User $user, Product $product): bool
    {
        return $this->view($user, $product) && $product->trashed();
    }

    /**
     * Determine whether the user can restore the product.
     */
    public function restore(User $user, Product $product): bool
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.products'))
            && $this->trashed($product);
    }

    /**
     * Determine whether the user can permanently delete the product.
     */
    public function forceDelete(User $user, Product $product): bool
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.products'))
            && $this->trashed($product)
            && Settings::get('delete_forever');
    }

    /**
     * Determine wither the given product is trashed.
     */
    public function trashed(Product $product): bool
    {
        return $this->hasSoftDeletes() && method_exists($product, 'trashed') && $product->trashed();
    }

    /**
     * Determine wither the product use soft deleting trait.
     */
    public function hasSoftDeletes(): bool
    {
        return in_array(
            SoftDeletes::class,
            array_keys((new \ReflectionClass(Product::class))->getTraits())
        );
    }
}