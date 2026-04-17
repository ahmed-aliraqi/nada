<?php

Breadcrumbs::for('dashboard.products.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(__('products.plural'), route('dashboard.products.index'));
});

Breadcrumbs::for('dashboard.products.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.products.index');
    $breadcrumb->push(__('products.trashed'), route('dashboard.products.trashed'));
});

Breadcrumbs::for('dashboard.products.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.products.index');
    $breadcrumb->push(__('products.actions.create'), route('dashboard.products.create'));
});

Breadcrumbs::for('dashboard.products.show', function ($breadcrumb, $product) {
    $breadcrumb->parent('dashboard.products.index');
    $breadcrumb->push($product->name ?: '#' . $product->id, route('dashboard.products.show', $product));
});

Breadcrumbs::for('dashboard.products.edit', function ($breadcrumb, $product) {
    $breadcrumb->parent('dashboard.products.show', $product);
    $breadcrumb->push(__('products.actions.edit'), route('dashboard.products.edit', $product));
});