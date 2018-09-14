<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='employee';
    protected $fillable = [
        'nombre','apaterno','amaterno','email','puesto','fecha_nacimiento','id_address'
    ];
}
