<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterHostel extends Model
{
    protected $fillable = [
        'landlord_id', 'hname', 'address', 'hregion', 'pics', 'lat', 'lng', 'status'
    ];

    public function rooms()
    {
        return $this->hasMany('App\RegisterHostelRooms', 'hostel_id');
    }

    public function brooms()
    {
        return $this->hasMany('App\BookedRooms', 'hostel_id');
    }

    public function apprRequests()
    {
        return $this->hasMany('App\ApprovedBooking', 'hostel_id');
    }
}
