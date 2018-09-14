<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee_Skills extends Model
{
    protected $table='employee_skills';
    public $timestamps=false;
    protected $fillable = [
        'id_employee','id_skill','calificacion'
    ];
}
