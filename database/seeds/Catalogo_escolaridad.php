<?php

use Illuminate\Database\Seeder;
use App\Personal\Catalogo_Escolaridad as Escolaridad;
class Catalogo_escolaridad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Escolaridad::create([
          'id' =>'1',
          'tipo'=> 'Licenciatura',
        ]);
        Escolaridad::create([
          'id' =>'2',
          'tipo'=> 'Tecnica',
        ]);
        Escolaridad::create([
          'id' =>'3',
          'tipo'=> 'Auxiliar',
        ]);
        Escolaridad::create([
          'id' =>'4',
          'tipo'=> 'Pasantía',
        ]);
        Escolaridad::create([
          'id' =>'5',
          'tipo'=> 'Cuidadora',
        ]);


    }
}
