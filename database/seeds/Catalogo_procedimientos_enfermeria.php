<?php

use Illuminate\Database\Seeder;
use App\Personal\procedimientos_enfermeria as procedimientos;
class Catalogo_procedimientos_enfermeria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         //
         procedimientos::create([
           'id' =>'1',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA INTRAMUSCULAR',
         ]);
         procedimientos::create([
           'id' =>'2',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA SUB-CUTANEA',
         ]);
         procedimientos::create([
           'id' =>'3',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA INTRADERMICA',
         ]);
         procedimientos::create([
           'id' =>'4',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA INTRAVENOSA',
         ]);
         procedimientos::create([
           'id' =>'5',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA ORAL',
         ]);
         procedimientos::create([
           'id' =>'6',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA SUBLINGUAL',
         ]);
         procedimientos::create([
           'id' =>'7',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA NASOGASTRICA',
         ]);
         procedimientos::create([
           'id' =>'8',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA RECTAL',
         ]);
         procedimientos::create([
           'id' =>'9',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA CUTANEA',
         ]);
         procedimientos::create([
           'id' =>'10',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA OFTALMICA',
         ]);
         procedimientos::create([
           'id' =>'11',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA OTICA',
         ]);
         procedimientos::create([
           'id' =>'12',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA INAHLATORIA',
         ]);
         procedimientos::create([
           'id' =>'13',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA AEROSOLTERAPIA',
         ]);
         procedimientos::create([
           'id' =>'14',
           'descripcion'=> 'ADMINISTRACION DE MEDICAMENTOS VIA VAGINAL',
         ]);
         procedimientos::create([
           'id' =>'15',
           'descripcion'=> 'APLICACION DE CATETER VENOSO PERIFERICO (VENOCLISIS)',
         ]);
         procedimientos::create([
           'id' =>'16',
           'descripcion'=> 'RETIRO DE CATETER VENOSO PERIFERICO (VENOCLISIS)',
         ]);
         procedimientos::create([
           'id' =>'17',
           'descripcion'=> 'BAÑO NORMAL',
         ]);
         procedimientos::create([
           'id' =>'18',
           'descripcion'=> 'BAÑO DE ESPONJA',
         ]);
         procedimientos::create([
           'id' =>'19',
           'descripcion'=> 'ASEO BUCAL',
         ]);
         procedimientos::create([
           'id' =>'20',
           'descripcion'=> 'CAMBIO DE BOLSA DE COLOSTOMIA',
         ]);
         procedimientos::create([
           'id' =>'21',
           'descripcion'=> 'COLOCACION DE SONDA VESICAL EN MUJERES',
         ]);
         procedimientos::create([
           'id' =>'22',
           'descripcion'=> 'COLOCACION DE SONDA VESICAL EN HOMBRES',
         ]);
         procedimientos::create([
           'id' =>'23',
           'descripcion'=> 'COLOCACION DE SONDA NASOGASTRICA',
         ]);
         procedimientos::create([
           'id' =>'24',
           'descripcion'=> 'COLOCACION DE SONDA OROGASTRICA',
         ]);
         procedimientos::create([
           'id' =>'25',
           'descripcion'=> 'CURACION MAYOR',
         ]);
         procedimientos::create([
           'id' =>'26',
           'descripcion'=> 'CURACION MENOR',
         ]);
         procedimientos::create([
           'id' =>'27',
           'descripcion'=> 'CURACION DE ESCARAS',
         ]);
         procedimientos::create([
           'id' =>'28',
           'descripcion'=> 'ENEMAS EVACUANTES',
         ]);
         procedimientos::create([
           'id' =>'29',
           'descripcion'=> 'PERFORACIONES PEDIATRICAS EN EL LOBULO DEL PABELLON AURICULAR',
         ]);
         procedimientos::create([
           'id' =>'30',
           'descripcion'=> 'RECAMBIO DE DIALISIS (MANUAL)',
         ]);
         procedimientos::create([
           'id' =>'31',
           'descripcion'=> 'DIALISIS CON MAQUINA',
         ]);
         procedimientos::create([
           'id' =>'32',
           'descripcion'=> 'SUTURAS',
         ]);
         procedimientos::create([
           'id' =>'33',
           'descripcion'=> 'RETIRO DE PUNTOS DE SUTURA',
         ]);
         procedimientos::create([
           'id' =>'34',
           'descripcion'=> 'RETIRO DE SONDA VESICAL',
         ]);
         procedimientos::create([
           'id' =>'35',
           'descripcion'=> 'RETIRO DE SONDA NASOGASTRICA',
         ]);
         procedimientos::create([
           'id' =>'36',
           'descripcion'=> 'RETIRO DE SONDA OROGASTRICA',
         ]);
         procedimientos::create([
           'id' =>'37',
           'descripcion'=> 'TOMA DE GLUCOSA',
         ]);
         procedimientos::create([
           'id' =>'38',
           'descripcion'=> 'TOMA DE PESO',
         ]);
         procedimientos::create([
           'id' =>'39',
           'descripcion'=> 'TOMA DE TALLA',
         ]);
         procedimientos::create([
           'id' =>'40',
           'descripcion'=> 'TOMA DE PRESION ARTERIAL',
         ]);
         procedimientos::create([
           'id' =>'41',
           'descripcion'=> 'TOMA DE FRECUENCIA CARDIACA',
         ]);
         procedimientos::create([
           'id' =>'42',
           'descripcion'=> 'TOMA DE FRECUENCIA RESPIRATORIA',
         ]);
         procedimientos::create([
           'id' =>'43',
           'descripcion'=> 'TOMA DE TEMPERATURA',
         ]);
         procedimientos::create([
           'id' =>'44',
           'descripcion'=> 'TOMA DE SATURACION DE OXIGENO',
         ]);
         procedimientos::create([
           'id' =>'45',
           'descripcion'=> 'ADMINISTRACION DE OXIGENO',
         ]);
         procedimientos::create([
           'id' =>'46',
           'descripcion'=> 'NEBULIZACIONES',
         ]);
         procedimientos::create([
           'id' =>'47',
           'descripcion'=> 'ASPIRACION DE SECRECIONES POR BOCA',
         ]);
         procedimientos::create([
           'id' =>'48',
           'descripcion'=> 'ASPIRACION DE SECRECIONES POR TRAQUEOSTOMIA',
         ]);
         procedimientos::create([
           'id' =>'49',
           'descripcion'=> 'MOVILIZACION DE PACIENTES',
         ]);
         procedimientos::create([
           'id' =>'50',
           'descripcion'=> 'ALIMENTACION POR SONDA DE GASTROSTOMIA',
         ]);
         procedimientos::create([
           'id' =>'51',
           'descripcion'=> 'ALIMENTACION POR SONDA NASOGASTRICA',
         ]);
         procedimientos::create([
           'id' =>'52',
           'descripcion'=> 'MANEJO DE CATETER VENOSO CENTRAL',
         ]);
         procedimientos::create([
           'id' =>'53',
           'descripcion'=> 'CUIDADOS DE LA TRAQUEOSTOMIA',
         ]);
         procedimientos::create([
           'id' =>'54',
           'descripcion'=> 'BALANCE DEL EQUILIBRIO DE LIQUIDOS (CONTROL DE LIQUIDOS)',
         ]);
         procedimientos::create([
           'id' =>'55',
           'descripcion'=> 'PREVENCION DE ULCERAS POR PRESION',
         ]);
         procedimientos::create([
           'id' =>'56',
           'descripcion'=> 'VALORACION DE ESCALA DEL DOLOR',
         ]);
         procedimientos::create([
           'id' =>'57',
           'descripcion'=> 'VALORACION DE ULCERA POR PRESION ',
         ]);
         procedimientos::create([
           'id' =>'58',
           'descripcion'=> 'VALORACION DE RIESGO DE CAIDA',
         ]);
         procedimientos::create([
           'id' =>'59',
           'descripcion'=> 'TOMA DE MUESTRAS DE LABORATORIO',
         ]);
         procedimientos::create([
           'id' =>'60',
           'descripcion'=> 'CIRCULACION DE CIRUGIAS',
         ]);
         procedimientos::create([
           'id' =>'61',
           'descripcion'=> 'INSTRUMENTAR CIRUGIAS',
         ]);
         procedimientos::create([
           'id' =>'62',
           'descripcion'=> 'COLOCACION DE IMPLANTE ANTICONCEPTIVO',
         ]);
         procedimientos::create([
           'id' =>'63',
           'descripcion'=> 'RETIRO DE IMPLANTE ANTICONCEPTIVO',
         ]);
         procedimientos::create([
           'id' =>'64',
           'descripcion'=> 'COLOCACION DE DIU',
         ]);
         procedimientos::create([
           'id' =>'65',
           'descripcion'=> 'RETIRO DE DIU',
         ]);
         procedimientos::create([
           'id' =>'66',
           'descripcion'=> 'VENDAJES',
         ]);
         procedimientos::create([
           'id' =>'67',
           'descripcion'=> 'MANEJO DE BOMBA DE INFUSION',
         ]);
         procedimientos::create([
           'id' =>'68',
           'descripcion'=> 'MANEJO DE RESPIRADOR AUTOMATICO',
         ]);
         procedimientos::create([
           'id' =>'69',
           'descripcion'=> 'TRNSFUSION SANGUINEA',
         ]);
         procedimientos::create([
           'id' =>'70',
           'descripcion'=> 'COLOCACION DE CANULA DE GUEDEL',
         ]);
         procedimientos::create([
           'id' =>'71',
           'descripcion'=> 'VENTILACION CON MASCARILLA Y AMBU',
         ]);
         procedimientos::create([
           'id' =>'72',
           'descripcion'=> 'CONTROL Y CUIDADO DE DRENAJES QUIRURGICOS (PENROSE)',
         ]);
     }
}
