<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Paciente\Responsables;
class useradd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        User::create( [
          'id' =>'4',
          'username'=> 'admin',
          'tipo' =>'Administrador',
          'activo' =>'true',
          'password' => bcrypt('que9323'),
          'id_personal' => '3',
          'activo' => '1',
          'created_at'=> date('Y-m-d'),
          'remember_token' => str_random(60),
        ] );
        */
        Responsables::create([
                            'nombre' =>'2',
                            'apellido_paterno' =>'2',
                            'apellido_materno' =>'2',
                            'sexo' =>'2',
                            'parentesco' =>'2'
                          ]);
    }
}
