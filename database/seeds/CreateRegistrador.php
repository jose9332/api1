<?php

use Illuminate\Database\Seeder;
use App\Personal\Empleado_registrado;
class CreateRegistrador extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Empleado_registrado::create([
          'id_personal'=>'2' ,
          'id_direccion' =>'3',
          'id_escolaridad' =>'2',
          'id_perfil_pacientes'=>'2',
          'activo'=>'0',
          //'usuario_registra' =>$request->candidato['id_user']
          'usuario_registra' =>'1'
        ]);

    }
}
