<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\Representantes;
use Illuminate\Support\Facades\Redirect;
use TelSUR\Http\Requests\FormRequestRepresentantes;
use DB;

class RepresentantesController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$representantes=DB::table('representantes as r')
    		->join('datos_estudiantes as de','r.iddatos_estudiantes','=','de.iddatos_estudiantes')
    		->select('r.idrepresentantes','de.iddatos_estudiantes','de.nombres as nombres','r.representantes_nombre','r.representantes_apellido','r.representantes_cedula','r.representantes_edad','r.representantes_fechanacimiento','r.representantes_paisnacimiento','r.representantes_nacionalidad','r.representantes_direccion','r.representantes_parentesco','r.representantes_ocupacion','r.representantes_direcionlaboral')
    		->where('de.nombres','LIKE','%'.$query.'%')
    		->orderBy('idrepresentantes','desc')
    		->paginate(7);
    		return view('instituto.representantes.index',["representantes"=>$representantes,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$datos_estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();

    	return view('instituto.representantes.create',["datos_estudiantes"=>$datos_estudiantes]);
    }

    public function store(FormRequestRepresentantes $request)
    {
    	$representantes= new Representantes; //Modelo

    	$representantes->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$representantes->representantes_nombre=$request->get('representantes_nombre');
    	$representantes->representantes_apellido=$request->get('representantes_apellido');
    	$representantes->representantes_cedula=$request->get('representantes_cedula');
    	$representantes->representantes_edad=$request->get('representantes_edad');
    	$representantes->representantes_fechanacimiento=$request->get('representantes_fechanacimiento');
    	$representantes->representantes_paisnacimiento=$request->get('representantes_paisnacimiento');
    	$representantes->representantes_nacionalidad=$request->get('representantes_nacionalidad');
    	$representantes->representantes_direccion=$request->get('representantes_direccion');
    	$representantes->representantes_parentesco=$request->get('representantes_parentesco');
    	$representantes->representantes_ocupacion=$request->get('representantes_ocupacion');
    	$representantes->representantes_direcionlaboral=$request->get('representantes_direcionlaboral');

	$representantes->condicion='1';
    	$representantes->save();

	return Redirect::to('instituto/representantes');
    }

    public function show($id)
    {
    	return view('instituto.representantes.show',["representantes"=>Representantes::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$representantes=Representantes::findOrFail($id);
    	$estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();
    	return view('instituto.representantes.edit',["representantes"=>$representantes,"estudiantes"=>$estudiantes]);
    }

    public function update(FormRequestRepresentantes $request, $id)
    {
    	$representantes=Representantes::findOrFail($id);

	$representantes->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	
    	$representantes->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$representantes->representantes_nombre=$request->get('representantes_nombre');
    	$representantes->representantes_apellido=$request->get('representantes_apellido');
    	$representantes->representantes_cedula=$request->get('representantes_cedula');
    	$representantes->representantes_edad=$request->get('representantes_edad');
    	$representantes->representantes_fechanacimiento=$request->get('representantes_fechanacimiento');
    	$representantes->representantes_paisnacimiento=$request->get('representantes_paisnacimiento');
    	$representantes->representantes_nacionalidad=$request->get('representantes_nacionalidad');
    	$representantes->representantes_direccion=$request->get('representantes_direccion');
    	$representantes->representantes_parentesco=$request->get('representantes_parentesco');
    	$representantes->representantes_ocupacion=$request->get('representantes_ocupacion');
    	$representantes->representantes_direcionlaboral=$request->get('representantes_direcionlaboral');
    	
	$representantes->update();

	return Redirect::to('instituto/representantes');

    }

    public function destroy($id)
    {
    	$representantes=Representantes::FindOrFail($id);
    	$representantes->condicion='Inactivo';
    	$representantes->update();
    	return Redirect::to('instituto/representantes');
    }
}
