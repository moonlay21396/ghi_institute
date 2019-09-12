<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'id',
        'photo',
        'name',
        'position',
        'university',
        'degree',
        'fb_link',
        'description'
    ];
}
