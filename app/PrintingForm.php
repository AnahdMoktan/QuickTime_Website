<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrintingForm extends Model
{
    protected $table ="printing_forms";
    protected $fillable=[
        'category','size','color','paperweight','lamination','quantity',
        'name', 'company_name', 'address', 'contact', 'email', 'message'
    ];
}
