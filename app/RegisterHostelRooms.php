<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterHostelRooms extends Model
{
    protected $fillable = [
        'hostel_id', 'rno', 'rent', 'capacity', 'currentcapacity', 'status'
    ];
}
