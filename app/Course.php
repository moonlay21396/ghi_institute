<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'id',
        'name',
        'photo',
        'start_date',
        'duration',
        'fee',
        'description',
        'category'
    ];
}
