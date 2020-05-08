<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'identity',
        'department_id',
        'citie_id',
        'phone',
        'email',
    ];
}
