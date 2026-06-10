<?php

Breadcrumbs::for('dashboard.orders.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(__('orders.plural'), route('dashboard.orders.index'));
});

Breadcrumbs::for('dashboard.orders.show', function ($breadcrumb, $order) {
    $breadcrumb->parent('dashboard.orders.index');
    $breadcrumb->push('#' . $order->id, route('dashboard.orders.show', $order));
});
