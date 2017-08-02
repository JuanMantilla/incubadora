<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'temperatura', 'humedad',
    ];

    protected $timestamp = true;

}
