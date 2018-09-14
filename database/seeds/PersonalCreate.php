<?php

use Illuminate\Database\Seeder;
use App\Personal\Candidatos;
class PersonalCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Candidatos::create([
          'nombre'=> 'admins',
          'apellido_paterno' =>'default',
          'apellido_materno' =>'default',

          'telefono' => '951',
          'estado_civil'=>'soltero',
          'inicio_disponibilidad' => '00:00',
          'fin_disponibilidad' =>'00:00',
          'status' => 'registrado',
          //'fecha_registro' => '2017-11-02 00:00:00',
        ]);

    }
}
