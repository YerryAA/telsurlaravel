<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\Direccion;
use Illuminate\Support\Facades\Redirect;
use TelSUR\Http\Requests\FormRequestDireccion;
use DB;

class DireccionController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$direccion=DB::table('direccion as d')
    		->join('datos_estudiantes as de','d.iddatos_estudiantes','=','de.iddatos_estudiantes')
    		->select('d.iddireccion','de.iddatos_estudiantes','de.nombres as nombres','d.direccion','d.pais_nacimiento','d.estado','d.nacionalidad')
		->where('de.nombres','LIKE','%'.$query.'%')
    		->orderBy('iddireccion','desc')
    		->paginate(7);
    		return view('instituto.direccion.index',["direccion"=>$direccion,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$datos_estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();

    	return view('instituto.direccion.create',["datos_estudiantes"=>$datos_estudiantes]);
    }

    public function store(FormRequestDireccion $request)
    {
    	$direccion= new Direccion; //Modelo

    	$direccion->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$direccion->direccion=$request->get('direccion');
    	$direccion->pais_nacimiento=$request->get('pais_nacimiento');
    	$direccion->estado=$request->get('estado');
    	$direccion->nacionalidad=$request->get('nacionalidad');
    	
	$direccion->condicion='1';
    	$direccion->save();

	return Redirect::to('instituto/direccion');
    }

    public function show($id)
    {
    	return view('instituto.direccion.show',["direccion"=>Direccion::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$direccion=Direccion::findOrFail($id);
    	$estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();
    	return view('instituto.direccion.edit',["direccion"=>$direccion,"estudiantes"=>$estudiantes]);
    }

    public function update(FormRequestDireccion $request, $id)
    {
    	$direccion=Direccion::findOrFail($id);

	$direccion->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$direccion->direccion=$request->get('direccion');
    	$direccion->pais_nacimiento=$request->get('pais_nacimiento');
    	$direccion->estado=$request->get('estado');
    	$direccion->nacionalidad=$request->get('nacionalidad');
    	
	$direccion->update();

	return Redirect::to('instituto/direccion');

    }

    public function destroy($id)
    {
    	$direccion=Direccion::FindOrFail($id);
    	$direccion->condicion='Inactivo';
    	$direccion->update();
    	return Redirect::to('instituto/direccion');
    }
}
