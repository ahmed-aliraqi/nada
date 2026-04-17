<?php

Breadcrumbs::for('dashboard.categories.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(__('categories.plural'), route('dashboard.categories.index'));
});

Breadcrumbs::for('dashboard.categories.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.categories.index');
    $breadcrumb->push(__('categories.trashed'), route('dashboard.categories.trashed'));
});

Breadcrumbs::for('dashboard.categories.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.categories.index');
    $breadcrumb->push(__('categories.actions.create'), route('dashboard.categories.create'));
});

Breadcrumbs::for('dashboard.categories.show', function ($breadcrumb, $category) {
    $breadcrumb->parent('dashboard.categories.index');
    $breadcrumb->push($category->name ?: '#' . $category->id, route('dashboard.categories.show', $category));
});

Breadcrumbs::for('dashboard.categories.edit', function ($breadcrumb, $category) {
    $breadcrumb->parent('dashboard.categories.show', $category);
    $breadcrumb->push(__('categories.actions.edit'), route('dashboard.categories.edit', $category));
});
