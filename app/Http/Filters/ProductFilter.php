<?php

namespace App\Http\Filters;

use AhmedAliraqi\LaravelFilterable\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends BaseFilter
{
    /**
     * The list of relations that are allowed to be included with the query.
     */
    protected array $supportedInclude = [];

    /**
     * Registered filters to operate upon.
     */
    protected array $filters = [
        'name',
        'category',
        'sort',
        'selected_id',
    ];

    /**
     * Apply a filter to the query based on the "name" field.
     */
    protected function name(mixed $value): void
    {
        $this->builder->whereTranslationLike('name', "%$value%");
    }

    /**
     * Apply a filter to the query based on the "category" field.
     */
    protected function category(mixed $value): void
    {
        $this->builder->where(function (Builder $builder) use ($value) {
            $builder->whereHas('category', function ($query) use ($value) {
                $query->whereTranslationLike('name', "%$value%");
            });
            $builder->orWhere('category_id', $value);
        });
    }

    /**
     * Apply a filter to the query based on the "sort" field.
     */
    protected function sort(mixed $value): void
    {
        switch ($value) {
            case 'price_low_high':
                $this->builder->oldest('price');
                break;
            case 'price_high_low':
                $this->builder->latest('price');
                break;
            case 'oldest':
                $this->builder->oldest('id');
                break;
            default:
                $this->builder->latest('id');
                break;
        }
    }

    /**
     * Sorting results by the given id.
     */
    public function selectedId(mixed $ids): void
    {
        if ($ids) {
            $this->builder->sortingByIds($ids);
        }
    }
}
