<?php

namespace AhmedAliraqi\Ui\Models;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use function config;

class Media extends \Spatie\MediaLibrary\MediaCollections\Models\Media
{
    public function download()
    {
        return route('download', [$this->model->section, $this->collection_name]);
    }
}
