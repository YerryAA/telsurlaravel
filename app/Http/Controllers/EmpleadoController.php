<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\Empleado;
use Illuminate\Support\Facades\Redirect;
use TelSUR\Http\Requests\FormRequestEmpleado;
use DB;

class EmpleadoController extends Controller
{
     public function __construct()
    {
            $this->middleware('auth');
    }

    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$empleado=DB::table('empleado')->where('empleado_nombre','LIKE','%'.$query.'%')
    		->where('condicion','=','1')
    		->orderBy('idempleado','desc')
    		->paginate(7);
    		return view('instituto.empleado.index',["empleado"=>$empleado,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	return view('instituto.empleado.create');
    }

    public function store(FormRequestEmpleado $request)
    {
    	$empleado= new Empleado;

    	$empleado->empleado_nombre=$request->get('empleado_nombre');
    	$empleado->empleado_apellido=$request->get('empleado_apellido');
    	$empleado->empleado_cedula=$request->get('empleado_cedula');
    	$empleado->empleado_horario=$request->get('empleado_horario');
    	$empleado->empleado_estatus=$request->get('empleado_estatus');
	$empleado->empleado_cargo=$request->get('empleado_cargo');
	$empleado->condicion='1';
    	$empleado->save();

	return Redirect::to('instituto/empleado');
    }

    public function show($id)
    {
    	return view('instituto.empleado.show',["empleado"=>Empleado::findOrFail($id)]);
    }

    public function edit($id)
    {
    	return view('instituto.empleado.edit',["empleado"=>Empleado::findOrFail($id)]);
    }

    public function update(FormRequestEmpleado $request, $id)
    {
    	$empleado=Empleado::findOrFail($id);

    	$empleado->empleado_nombre=$request->get('empleado_nombre');
    	$empleado->empleado_apellido=$request->get('empleado_apellido');
    	$empleado->empleado_cedula=$request->get('empleado_cedula');
    	$empleado->empleado_horario=$request->get('empleado_horario');
    	$empleado->empleado_estatus=$request->get('empleado_estatus');
    	$empleado->empleado_cargo=$request->get('empleado_cargo');
	$empleado->update();

	return Redirect::to('instituto/empleado');

    }

    public function destroy($id)
    {
    	$empleado=Empleado::FindOrFail($id);
    	$empleado->condicion='0';
    	$empleado->update();
    	return Redirect::to('instituto/empleado');
    }
}
