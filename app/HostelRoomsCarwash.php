<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostelRoomsCarwash extends Model
{
    protected $fillable = [
        'hostel_id', 'rno', 'pics',
    ];
}
