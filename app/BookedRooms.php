<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookedRooms extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'pnumber', 'user_id', 'room_id', 'hostel_id', 'landlord_id', 'status'
    ];
}
