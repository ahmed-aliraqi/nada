<?php

use AhmedAliraqi\Ui\ServiceProvider;
use App\Providers\AppServiceProvider;
use App\Providers\HorizonServiceProvider;
use App\Providers\LayoutsServiceProvider;
use App\Providers\SoftDeletesServiceProvider;

return [
    AppServiceProvider::class,
    HorizonServiceProvider::class,
    LayoutsServiceProvider::class,
    SoftDeletesServiceProvider::class,
    ServiceProvider::class,
];
