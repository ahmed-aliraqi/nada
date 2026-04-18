<?php

namespace AhmedAliraqi\Ui\Fields;

use Illuminate\Support\HtmlString;

class Editor extends Field
{
    /**
     * The getter for the given value.
     *
     * @param string $key
     * @return \Illuminate\Support\HtmlString|void
     */
    public function get(string $key)
    {
        if ($value = data_get($this->frontendSection->fields, $key)) {
            return new HtmlString(unserialize($value));
        }
    }
}