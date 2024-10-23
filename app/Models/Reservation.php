<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'offer_id',
    ];



    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    // attributes
    // encode offer
    public function setOfferIdAttribute($value)
    {
        $this->attributes['offer_id'] = json_encode($value);
    }
}
