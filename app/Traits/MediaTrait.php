<?php

namespace App\Traits;

use Spatie\MediaLibrary\InteractsWithMedia;

trait MediaTrait
{
    use InteractsWithMedia;

    public function getFilesMediaAttribute()
    {

        $media = $this->getMedia('media');
        if (!$media->isEmpty()) {
            return $media;
        } else {
            return null;
        }
    }

    public function getFilesThumbnailAttribute()
    {
        $media = $this->getMedia('thumbnail');
        if (!$media->isEmpty()) {
            return $media;
        } else {
            return null;
        }
    }
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaConversion('webp_format')
            ->nonQueued()
            ->format(
                'webp'


            );
    }

}
