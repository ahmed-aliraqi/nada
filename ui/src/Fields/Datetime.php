<?php

namespace AhmedAliraqi\Ui\Fields;

use Carbon\Carbon;

class Datetime extends Field
{
    /**
     * The setter for the given value.
     *
     * @param mixed $value
     * @return string
     */
    public function set(mixed $value): string
    {
        return serialize(Carbon::parse($value));
    }
}