<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\Discapacidad;
use Illuminate\Support\Facades\Redirect;
use TelSUR\Http\Requests\FormRequestDiscapacidad;
use DB;

class DiscapacidadController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$discapacidad=DB::table('discapacidad as d')
    		->join('datos_estudiantes as de','d.iddatos_estudiantes','=','de.iddatos_estudiantes')
    		->select('d.iddiscapacidad','de.iddatos_estudiantes','de.nombres as nombres','d.discapacidad_nombre','d.convulsiona','d.alergico','d.toma_medicamento')
		->where('de.nombres','LIKE','%'.$query.'%')
    		->orderBy('iddiscapacidad','desc')
    		->paginate(7);
    		return view('instituto.discapacidades.index',["discapacidad"=>$discapacidad,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$datos_estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();

    	return view('instituto.discapacidades.create',["datos_estudiantes"=>$datos_estudiantes]);
    }

    public function store(FormRequestDiscapacidad $request)
    {
    	$discapacidad= new Discapacidad; //Modelo

    	$discapacidad->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$discapacidad->discapacidad_nombre=$request->get('discapacidad_nombre');
    	$discapacidad->convulsiona=$request->get('convulsiona');
    	$discapacidad->alergico=$request->get('alergico');
    	$discapacidad->toma_medicamento=$request->get('toma_medicamento');
    	
	$discapacidad->condicion='1';
    	$discapacidad->save();

	return Redirect::to('instituto/discapacidades');
    }

    public function show($id)
    {
    	return view('instituto.discapacidades.show',["antecedentes"=>Discapacidad::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$discapacidad=Discapacidad::findOrFail($id);
    	$estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();
    	return view('instituto.discapacidades.edit',["discapacidad"=>$discapacidad,"estudiantes"=>$estudiantes]);
    }

    public function update(FormRequestDiscapacidad $request, $id)
    {
    	$discapacidad=Discapacidad::findOrFail($id);

	$discapacidad->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$discapacidad->discapacidad_nombre=$request->get('discapacidad_nombre');
    	$discapacidad->convulsiona=$request->get('convulsiona');
    	$discapacidad->alergico=$request->get('alergico');
    	$discapacidad->toma_medicamento=$request->get('toma_medicamento');
    	
	$discapacidad->update();

	return Redirect::to('instituto/discapacidades');

    }

    public function destroy($id)
    {
    	$discapacidad=Discapacidad::FindOrFail($id);
    	$discapacidad->condicion='Inactivo';
    	$discapacidad->update();
    	return Redirect::to('instituto/discapacidades');
    }
}
