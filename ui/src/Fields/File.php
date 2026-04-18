<?php

namespace AhmedAliraqi\Ui\Fields;

use AhmedAliraqi\Ui\Models\Media;

class File extends Field
{
    /**
     * The getter for the given value.
     *
     * @param string $key
     * @return \AhmedAliraqi\Ui\Models\Media|null
     */
    public function get(string $key)
    {
        $media = optional($this->frontendSection->getFirstMedia($key));

        if ($media->getKey()) {
            $media = Media::find($media->getKey());
        }

        return $media;
    }
}