<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignServices extends Model
{
    protected $table='design_services';
    protected $fillable=[
        'title', 'description', 'image'
    ];
}
