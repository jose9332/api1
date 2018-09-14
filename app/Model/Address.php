<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table='address';
    protected $fillable = [
        'calle','colonia','estado','cp'
    ];
}
