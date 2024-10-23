<?php

namespace App\Models;

use App\Traits\MediaTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;

class Item extends Model implements HasMedia
{
    use HasFactory, MediaTrait;

    protected $table = 'offer_items';
    protected $fillable = [
        'name',
        'price',
        'offer_id',
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
