<?php

Breadcrumbs::for('dashboard.ui.index', function ($breadcrumb, $group, $section) {
    $breadcrumb->parent('dashboard.home');
    $name = trans('ui.sections_name');
    $breadcrumb->push($name, route('dashboard.ui.index', [$group, $section]));
});
