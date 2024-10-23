<?php

namespace App\Models;

use App\Traits\MediaTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;

class Category extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, MediaTrait;

    protected $fillable = ['name', 'word', 'slug','pixel_script'];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function setSlugAttribute()
    {
        $this->attributes['slug'] = slug($this->name);
    }

}
