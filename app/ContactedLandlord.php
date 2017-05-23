<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactedLandlord extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'pnumber', 'user_id', 'hostel_id', 'landlord_id', 'message', 'status'
    ];
}
