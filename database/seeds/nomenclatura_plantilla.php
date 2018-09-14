<?php

use Illuminate\Database\Seeder;
use App\Administrador\nomenclatura_plantilla as Plantilla;
class nomenclatura_plantilla extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Plantilla::create([
          'clave'=>'L',
          'concepto'=>'Lunes',
        ]);
        Plantilla::create([
          'clave'=>'Ma',
          'concepto'=>'Martes',
        ]);
        Plantilla::create([
          'clave'=>'Mi',
          'concepto'=>'Miercoles',
        ]);
        Plantilla::create([
          'clave'=>'J',
          'concepto'=>'Jueves',
        ]);
        Plantilla::create([
          'clave'=>'V',
          'concepto'=>'Viernes',
        ]);
        Plantilla::create([
          'clave'=>'S',
          'concepto'=>'Sabado',
        ]);
        Plantilla::create([
          'clave'=>'D',
          'concepto'=>'Domingo',
        ]);
        Plantilla::create([
          'clave'=>'Mt',
          'concepto'=>'MATUTINO',
          'detalles'=>'DE 7 AM A 13 PM'
        ]);
        Plantilla::create([
          'clave'=>'Ve',
          'concepto'=>'VESPERTINO',
          'detalles'=>'DE 13 PM A 19 PM'
        ]);
        Plantilla::create([
          'clave'=>'N',
          'concepto'=>'NOCTURNO',
          'detalles'=>'DE 19 PM A 7 PM'
        ]);
        Plantilla::create([
          'clave'=>'Di',
          'concepto'=>'DIURNO',
          'detalles'=>'DE 7 AM A 19 PM'
        ]);
        Plantilla::create([
          'clave'=>'24',
          'concepto'=>'A CUALQUIER HORA',
          'detalles'=>'24 HORAS'
        ]);

        Plantilla::create([
          'clave'=>'1',
          'concepto'=>'1 HORA DISPONIBLE',
        ]);
        Plantilla::create([
          'clave'=>'2',
          'concepto'=>'2 HORAS DISPONIBLES',
        ]);
        Plantilla::create([
          'clave'=>'3',
          'concepto'=>'3 HORAS DISPONIBLES',
        ]);
        Plantilla::create([
          'clave'=>'4',
          'concepto'=>'4 HORAS DISPONIBLESnes',
        ]);
        Plantilla::create([
          'clave'=>'5',
          'concepto'=>'5 HORAS DISPONIBLES',
        ]);
        Plantilla::create([
          'clave'=>'6',
          'concepto'=>'6 HORAS DISPONIBLES',
        ]);
        Plantilla::create([
          'clave'=>'7',
          'concepto'=>'7 HORAS DISPONIBLES',
        ]);
    }
}
