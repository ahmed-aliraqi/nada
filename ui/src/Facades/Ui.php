<?php

namespace AhmedAliraqi\Ui\Facades;

use Illuminate\Support\Facades\Facade;

class Ui extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ui';
    }
}