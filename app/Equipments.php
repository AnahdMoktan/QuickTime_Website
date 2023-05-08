<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    protected $table='equipments';
    protected $fillable=[
        'title','description','image'
    ];

}
