<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurServices extends Model
{
    protected $table='our_services';
    protected $fillable=[
      'title', 'description', 'image'
    ];
}
