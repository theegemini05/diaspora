<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApprovedBooking extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'pnumber', 'user_id', 'room_id', 'hostel_id', 'landlord_id', 'book_id', 'status', 'message'
    ];
}
