<?php

namespace App\Support;


class CartItem implements \JsonSerializable
{
    public function __construct(
        protected mixed $id,
        protected string $name,
        protected string $category,
        protected float|int|string $price,
        protected ?string $image = null,
        protected ?string $url = null,
        protected int $quantity = 1,
    ) {
    }

    public function getId(): mixed
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getPrice(): float|int|string
    {
        return $this->price;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getTotalPrice(): float|int|string
    {
        return $this->getPrice() * $this->getQuantity();
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'category' => $this->getCategory(),
            'price' => sprintf('%s %.2f', config('app.currency'), number_format($this->getPrice(), 2)),
            'image' => $this->getImage(),
            'url' => $this->getUrl(),
            'quantity' => $this->getQuantity(),
            'total_price' => sprintf('%s %.2f', config('app.currency'), number_format($this->getTotalPrice(), 2)),
        ];
    }
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
