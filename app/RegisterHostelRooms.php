<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterHostelRooms extends Model
{
    protected $fillable = [
        'hostel_id', 'rno', 'rent', 'capacity', 'currentcapacity', 'status'
    ];

    public function hostel(){
        return $this->belongsTo('App\RegisterHostel', 'hostel_id');
    }

    public function occupiedrooms(){
        return $this->hasMany('App\OccupiedRooms', 'room_id');
    }

    public function bookedrooms(){
        return $this->hasMany('App\BookedRooms', 'room_id');
    }

    public function approvedbooking(){
        return $this->hasMany('App\ApprovedBooking', 'room_id');
    }
}
