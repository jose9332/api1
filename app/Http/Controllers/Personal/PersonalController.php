<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use App\Model\Employee;
use App\Model\Address;
use App\Model\Employee_Skills;
use App\Http\Controllers\Controller;
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Personal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $direccion = Address::create([
          'estado' => $request->direccion['estado'],
          'colonia' => $request->direccion['colonia'],
          'calle' => $request->direccion['calle'],
          'cp' => $request->direccion['cp'],
        ]);

        $cadena= explode('/',$request->empleado['fecha_nacimiento']);
        $empleado = Employee::create([
          'fecha_nacimiento' =>$cadena[2]."-".$cadena[1]."-".$cadena[0],
          'nombre'=> $request->empleado['nombre'],
          'apaterno' =>$request->empleado['apellido_paterno'],
          'amaterno' =>$request->empleado['apellido_materno'],
          'email' => $request->empleado['email'],
          'puesto' => $request->empleado['puesto'],
          'id_address' =>$direccion->id
        ]);
          
          $contador = count($request->skills);
          for($i = 0; $i<$contador; $i++){
            Employee_Skills::create([
              'id_employee'=> $empleado->id,
              'id_skill' => $request->skills[$i],
              'calificacion' => $request->calificaciones[$i]
              
          ]);
          }
          
          

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    

    //BUSQUEDA
    public function view_show(){
      return view('Personal.show');
    }

    public function Search(Request $request)
    {
      $search = Employee::select('id','nombre','apaterno','amaterno','puesto')
      ->where('nombre','like','%'.$request->search['nombre'].'%')
      ->where('apaterno','like','%'.$request->search['apellido_paterno'].'%')
      ->where('amaterno','like','%'.$request->search['apellido_materno'].'%')
      ->get();
      return $search;
    }
    public function getDetails(Request $request)
    {
      $search = Employee::join('address','address.id','=','employee.id_address')      
      ->select('employee.id', 'employee.nombre', 'employee.apaterno','employee.amaterno', 'employee.email', 'employee.puesto',
      'address.calle', 'address.colonia','address.estado','address.cp')
      ->where('employee.id','=',$request->id)
      ->get();
      return $search;
    }
    

}
