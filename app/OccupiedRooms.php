<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OccupiedRooms extends Model
{
    protected $fillable = [
        'user_id', 'room_id', 'status',
    ];
}
