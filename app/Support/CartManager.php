<?php

namespace App\Support;

use App\Models\Product;
use Illuminate\Support\Facades\Crypt;

class CartManager
{
    /**
     * @var \App\Support\CartItem[]
     */
    protected array $cartItems = [];

    protected array $cart = [
        'items'  => [],
        'subtotal' => 0,
        'coupon' => null,
        'discount' => 0,
        'shipping' => 0,
        'total' => 0,
    ];

    public function __construct()
    {

    }

    public function fromToken(?string $token = null): static
    {
        if ($token) {
            try {
                $decrypted = Crypt::decryptString($token);
                $data = json_decode($decrypted, true);

                if (is_array(data_get($data, 'items'))) {
                    $this->cart['items'] = data_get($data, 'items');
                }

                if (is_numeric(data_get($data, 'subtotal'))) {
                    $this->cart['subtotal'] = data_get($data, 'subtotal');
                }

                if (is_numeric(data_get($data, 'discount'))) {
                    $this->cart['discount'] = data_get($data, 'discount');
                }

                if (is_numeric(data_get($data, 'shipping'))) {
                    $this->cart['shipping'] = data_get($data, 'shipping');
                }

                if (is_numeric(data_get($data, 'total'))) {
                    $this->cart['total'] = data_get($data, 'total');
                }

                if (data_get($data, 'coupon')) {
                    $this->cart['coupon'] = data_get($data, 'coupon');
                }

                $this->refreshCart();

            } catch (\Throwable $e) {
                //
            }
        }

        return $this;
    }

    protected function refreshCart(): void
    {
        $this->updateCartItems();

        $this->cart['subtotal'] = $this->calculateSubtotal();
        $this->cart['total'] = $this->calculateTotal();

        $this->calculateTotal();
    }

    public function setShippingPrice(float $price): static
    {
        $this->cart['shipping'] = $price;

        $this->refreshCart();

        return $this;
    }

    protected function updateCartItems(): static
    {
        $productIds = array_keys($this->cart['items']);

        $this->cartItems = Product::query()->whereIn('id', $productIds)->get()->map(function (Product $product) {
            return new CartItem(
                id: $product->getKey(),
                name: $product->getPurchasableName(),
                category: $product->getPurchasableCategory(),
                price: $product->getPurchasablePrice(),
                image: $product->getPurchasableImage(),
                url: $product->getPurchasableUrl(),
                quantity: (int) data_get($this->cart['items'], $product->id.'.quantity')
            );
        })->toArray();

        return $this;
    }

    /**
     * @return \App\Support\CartItem[]
     */
    public function getItems(): array
    {
        return $this->cartItems;
    }

    public function useCoupon(string $code): static
    {
        $discount = 0; //TODO: Get discount from coupon.

        $this->cart['coupon'] = $code;
        $this->cart['discount'] = $discount;

        $this->refreshCart();

        return $this;
    }
    public function clearCoupon(): static
    {
        $this->cart['coupon'] = null;
        $this->cart['discount'] = 0;

        $this->refreshCart();

        return $this;
    }

    public function getSubtotal(): float
    {
        return $this->cart['subtotal'];
    }

    public function getCoupon(): string|null
    {
        return $this->cart['coupon'];
    }

    public function getDiscount(): float
    {
        return $this->cart['discount'];
    }

    public function getShippingPrice(): float
    {
        return $this->cart['shipping'];
    }

    public function getTotal(): float
    {
        return $this->cart['total'];
    }

    protected function calculateSubtotal(): float
    {
        $total = 0;

        foreach ($this->getItems() as $item) {
            $total += $item->getTotalPrice();
        }

        return round($total, 2);
    }

    protected function calculateTotal(): static
    {
        $this->cart['total'] = ($this->getSubtotal() - $this->getDiscount()) + $this->getShippingPrice();

        return $this;
    }

    public function addItem(mixed $productId, int $quantity = 1): static
    {
        $this->cart['items'][$productId] = [
            'quantity' => $quantity,
        ];

        $this->refreshCart();

        return $this;
    }

    public function removeItem(mixed $productId): static
    {
        if (isset($this->cart['items'][$productId])) {
            unset($this->cart['items'][$productId]);
        }

        $this->refreshCart();

        return $this;
    }

    public function clear(): static
    {
        $this->cart['items'] = [];
        $this->cart['discount'] = 0;
        $this->cart['coupon'] = null;
        $this->cart['shipping'] = 0;

        $this->refreshCart();

        return $this;
    }

    public function get(): array
    {
        return [
            'items' => $this->getItems(),
            'items_count' => count($this->getItems()),
            'subtotal' => sprintf('%s %.2f', config('app.currency'), number_format($this->getSubtotal(), 2)),
            'discount' => sprintf('%s %.2f', config('app.currency'), number_format($this->getDiscount(), 2)),
            'coupon' => $this->getCoupon(),
            'shipping' => sprintf('%s %.2f', config('app.currency'), number_format($this->getShippingPrice(), 2)),
            'total' => sprintf('%s %.2f', config('app.currency'), number_format($this->getTotal(), 2)),
            'token' => $this->getToken(),
        ];
    }

    public function getToken(): string
    {
        return Crypt::encryptString(json_encode($this->cart));
    }
}
