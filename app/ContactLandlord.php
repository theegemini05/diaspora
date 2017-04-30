<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactLandlord extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'pnumber', 'user_id', 'hostel_id', 'landlord_id', 'message', 'status'
    ];
}
