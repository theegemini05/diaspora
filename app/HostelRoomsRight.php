<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostelRoomsRight extends Model
{
    protected $fillable = [
        'hostel_id', 'rno', 'pics',
    ];
}
