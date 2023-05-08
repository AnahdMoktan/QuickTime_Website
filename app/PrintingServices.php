<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrintingServices extends Model
{
    protected $table='printing_services';
    protected $fillable=[
        'title','description','image'
    ];
}
