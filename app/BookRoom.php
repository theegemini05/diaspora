<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRoom extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'pnumber', 'user_id', 'room_id', 'hostel_id', 'landlord_id', 'status'
    ];
}
