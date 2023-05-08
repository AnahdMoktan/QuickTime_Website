<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignForms extends Model
{
    protected $table='design_forms';
    protected $fillable=[
        'name','email','contact','website','message'
    ];
}
