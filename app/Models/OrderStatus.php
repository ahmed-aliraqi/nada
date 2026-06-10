<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderStatus extends Model
{
    const PENDING    = 'pending';
    const CONFIRMED  = 'confirmed';
    const PROCESSING = 'processing';
    const SHIPPED    = 'shipped';
    const DELIVERED  = 'delivered';
    const CANCELLED  = 'cancelled';

    const STATUSES = [
        self::PENDING,
        self::CONFIRMED,
        self::PROCESSING,
        self::SHIPPED,
        self::DELIVERED,
        self::CANCELLED,
    ];

    protected $fillable = ['order_id', 'status'];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
