<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OccupiedRooms extends Model
{
    protected $fillable = [
        'user_id', 'room_id', 'status',
    ];

    public function room(){
        return $this->belongsTo('App\RegisterHostelRooms', 'room_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
