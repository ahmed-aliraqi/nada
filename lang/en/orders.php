<?php

return [
    'singular'          => 'Order',
    'plural'            => 'Orders',
    'empty'             => 'There are no orders yet.',
    'empty_cart'        => 'Your cart is empty.',
    'placed_successfully' => 'Your order has been placed successfully.',
    'attributes'        => [
        'id'             => 'Order #',
        'full_name'      => 'Full Name',
        'phone'          => 'Phone',
        'email'          => 'Email',
        'address'        => 'Address',
        'delivery_notes' => 'Delivery Notes',
        'subtotal'       => 'Subtotal',
        'shipping_price' => 'Shipping',
        'discount'       => 'Discount',
        'total'          => 'Total',
        'status'         => 'Status',
        'created_at'     => 'Date',
    ],
    'statuses'          => [
        'pending'    => 'Pending',
        'confirmed'  => 'Confirmed',
        'processing' => 'Processing',
        'shipped'    => 'Shipped',
        'delivered'  => 'Delivered',
        'cancelled'  => 'Cancelled',
    ],
    'actions'           => [
        'list'          => 'All Orders',
        'show'          => 'View Order',
        'update_status' => 'Update Status',
    ],
    'messages'          => [
        'status_updated' => 'Order status has been updated successfully.',
    ],
];
