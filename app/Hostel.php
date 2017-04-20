<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'landlord_id', 'hname', 'address', 'hregion', 'pics'
    ];
}
