<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostelRooms extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hostel_id', 'rno', 'pics', 'status'
    ];
}
