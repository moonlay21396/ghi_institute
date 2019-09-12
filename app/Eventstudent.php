<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventstudent extends Model
{
    protected $fillable = [
        'id',
        'event_id',
        'name',
        'email',
        'phone',
        'job',
        'education',
        'address'
    ];
}
