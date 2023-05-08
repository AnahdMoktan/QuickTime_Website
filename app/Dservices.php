<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dservices extends Model
{
    protected $table='dservices';
    protected $fillable=[
        'title','description','image'
    ];
}
