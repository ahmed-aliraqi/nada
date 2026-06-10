<?php

namespace App\Models\Contracts;

interface Purchasable
{
    public function getPurchasableId(): mixed;

    public function getPurchasableName(): string;
    public function getPurchasableCategory(): string;

    public function getPurchasableImage(): ?string;

    public function getPurchasablePrice(): float;

    public function getPurchasableUrl(): string;
}
