<?php

use Illuminate\Database\Seeder;
use App\User as User;
use App\Paciente\Pacientes;
use App\Personal\direccion as Direccion;
use App\Paciente\Pacientes_Registrados;
class personalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('personal')->insert([
          'id' =>'1',
          'fecha_nacimiento'=>'1995-09-23',
          'nombre'=> 'admin',
          'apellido_paterno' =>'default',
          'apellido_materno' =>'default',
          'estado_civil'=>'soltero',
          'telefono' => '951 xx xx',
          'sexo'=>'Hombre',
          'edad'=>'24',
          'inicio_disponibilidad' => '00:00',
          'fin_disponibilidad' =>'00:00',
          'status' => 'registrado',

          //'fecha_registro' => date('Y-m-d'),
        ]);


        User::create( [
          'id' =>'1',
          'username'=> 'admin',
          'tipo' =>'Administrador',
          'activo' =>'true',
          'password' => bcrypt('que9323'),
          'id_personal' => '1',
          'activo' => '1',
          'created_at'=> date('Y-m-d'),
          'remember_token' => str_random(60),
        ] );

        Pacientes::create([
          'nombre' => 'ESTANCIA',
          'apellido_paterno'=> 'PARA',
          'apellido_materno'=> 'ADULTOS MAYORES',
          'telefono'=> '0000',
          'estado_civil'=> 'soltero',
          'sexo'=> 'indistinto',
          'edad'=> '0',
          'status'=> 'activo'
        ]);

        Direccion::create([
          'municipio' => 'CUILAPAM',
          'colonia' => 'SEGUNDA SECCION',
          'calle' => 'LA CAMPESINA',
          'referencias' => 'CASA PARA ADULTOS MAYORES',
        ]);
        Pacientes_Registrados::create([
          'id_paciente' =>1,
          'id_direccion'=>1,
          'id_perfil_pacientes'=>2,
          'activo'=>'0',
          'usuario_registra' =>1
        ]);
    }
}
