<?php

namespace App\Models\Concerns;

trait PurchasableTrait
{
    public function getPurchasableId(): mixed
    {
        return $this->getKey();
    }

    public function getPurchasableName(): string
    {
        return $this->name;
    }

    public function getPurchasableCategory(): string
    {
        return $this->category->name ?? __('Uncategorized');
    }

    public function getPurchasableImage(): ?string
    {
        return $this->getFirstMediaUrl();
    }

    public function getPurchasablePrice(): float
    {
        return (float) $this->price;
    }

    public function getPurchasableUrl(): string
    {
        return route('products.show', $this);
    }
}
