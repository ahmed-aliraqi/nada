<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    protected $fillable = [
        'full_name', 'phone', 'email', 'address',
        'delivery_notes', 'subtotal', 'shipping_price',
        'discount', 'total',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function statuses(): HasMany
    {
        return $this->hasMany(OrderStatus::class)->orderByDesc('created_at');
    }

    public function latestStatus(): HasOne
    {
        return $this->hasOne(OrderStatus::class)->latestOfMany();
    }

    public function getTotalWithCurrencyAttribute(): string
    {
        return sprintf('%s %.2f', config('app.currency'), $this->total);
    }
}
