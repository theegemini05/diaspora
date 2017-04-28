<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostelRoomsBooster extends Model
{
    protected $fillable = [
        'hostel_id', 'rno', 'pics',
    ];
}
