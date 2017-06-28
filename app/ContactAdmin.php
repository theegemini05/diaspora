<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactAdmin extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'pnumber', 'message',
    ];
}
