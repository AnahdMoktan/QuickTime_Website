<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurTeams extends Model
{
    protected $table='our_teams';
    protected $fillable=[
        'name','designation','image'
    ];
}
