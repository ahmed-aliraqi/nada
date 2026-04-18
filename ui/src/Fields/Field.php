<?php

namespace AhmedAliraqi\Ui\Fields;

use AhmedAliraqi\Ui\Models\UiSection;

abstract class Field
{
    /**
     * @var \AhmedAliraqi\Ui\Models\UiSection
     */
    protected UiSection $frontendSection;

    public function setFrontendSection($frontendSection): self
    {
        $this->frontendSection = $frontendSection;

        return $this;
    }

    /**
     * The setter for the given value.
     *
     * @param mixed $value
     * @return string
     */
    public function set(mixed $value):string
    {
        return serialize($value);
    }

    /**
     * The getter for the given value.
     *
     * @param string $key
     * @return mixed|void
     */
    public function get(string $key)
    {
        if ($value = data_get($this->frontendSection->fields, $key)) {
            return unserialize($value);
        }
    }
}