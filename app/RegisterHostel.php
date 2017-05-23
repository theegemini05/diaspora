<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterHostel extends Model
{
    protected $fillable = [
        'landlord_id', 'hname', 'address', 'hregion', 'pics', 'lat', 'lng', 'status'
    ];
}
