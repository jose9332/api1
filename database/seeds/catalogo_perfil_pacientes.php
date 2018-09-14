<?php

use Illuminate\Database\Seeder;
use App\Personal\Catalogo_perfil_pacientes as Perfil;
class catalogo_perfil_pacientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Perfil::create([
          'id' =>'1',
          'descripcion'=> 'Critico',
        ]);

        Perfil::create([
          'id' =>'2',
          'descripcion'=> 'No Critico',
        ]);

        Perfil::create([
          'id' =>'3',
          'descripcion'=> 'Terapia Intensiva',
        ]);
    }
}
