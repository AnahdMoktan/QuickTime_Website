<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letswork extends Model
{
    protected $table='letsworks';
    protected $fillable=[
        'name','email','contact','website','message'
    ];
}
