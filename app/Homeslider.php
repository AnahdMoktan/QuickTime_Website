<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homeslider extends Model
{
    protected $table='homesliders';
    protected $fillable=[
        'title', 'image'
    ];
}
