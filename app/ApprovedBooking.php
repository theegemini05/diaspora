<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApprovedBooking extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'pnumber', 'user_id', 'room_id', 'hostel_id', 'landlord_id', 'book_id', 'status', 'message'
    ];

    public function hostels(){
        return $this->belongsTo('App\RegisterHostel', 'hostel_id');
    }

    public function room(){
        return $this->belongsTo('App\RegisterHostelRooms', 'room_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'landlord_id');
    }

    public function userClient(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
