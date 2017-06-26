<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\GrupoFamiliar;
use Illuminate\Support\Facades\Redirect;
use TelSUR\Http\Requests\FormRequestGrupoFamiliar;
use DB;

class GrupoFamiliarController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$grupofamiliar=DB::table('grupo_familiar as gf')
    		->join('datos_estudiantes as de','gf.iddatos_estudiantes','=','de.iddatos_estudiantes')
    		->select('gf.idgrupo_familiar','de.iddatos_estudiantes','de.nombres as nombres','gf.estado_padres','gf.servicios_basicos','gf.hermano_nombre','gf.hermano_apellido','gf.hermano_edad','gf.hermano_estudios','gf.hermano_trabajo','gf.otros_familiares','gf.relacion_familiar','gf.relacion_hermanos')
    		->where('de.nombres','LIKE','%'.$query.'%')
    		->orderBy('idgrupo_familiar','desc')
    		->paginate(7);
    		return view('instituto.grupofamiliar.index',["grupofamiliar"=>$grupofamiliar,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$datos_estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();

    	return view('instituto.grupofamiliar.create',["datos_estudiantes"=>$datos_estudiantes]);
    }

    public function store(FormRequestGrupoFamiliar $request)
    {
    	$grupofamiliar= new GrupoFamiliar; //Modelo

    	$grupofamiliar->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$grupofamiliar->estado_padres=$request->get('estado_padres');
    	$grupofamiliar->servicios_basicos=$request->get('servicios_basicos');
    	$grupofamiliar->hermano_nombre=$request->get('hermano_nombre');
    	$grupofamiliar->hermano_apellido=$request->get('hermano_apellido');
    	$grupofamiliar->hermano_edad=$request->get('hermano_edad');
    	$grupofamiliar->hermano_estudios=$request->get('hermano_estudios');
    	$grupofamiliar->hermano_trabajo=$request->get('hermano_trabajo');
    	$grupofamiliar->otros_familiares=$request->get('otros_familiares');
    	$grupofamiliar->relacion_familiar=$request->get('relacion_familiar');
    	$grupofamiliar->relacion_hermanos=$request->get('relacion_hermanos');

	$grupofamiliar->condicion='1';
    	$grupofamiliar->save();

	return Redirect::to('instituto/grupofamiliar');
    }

    public function show($id)
    {
    	return view('instituto.grupofamiliar.show',["antecedentes"=>GrupoFamiliar::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$grupofamiliar=GrupoFamiliar::findOrFail($id);
    	$estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();
    	return view('instituto.grupofamiliar.edit',["grupofamiliar"=>$grupofamiliar,"estudiantes"=>$estudiantes]);
    }

    public function update(FormRequestGrupoFamiliar $request, $id)
    {
    	$grupofamiliar=GrupoFamiliar::findOrFail($id);

	$grupofamiliar->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$grupofamiliar->estado_padres=$request->get('estado_padres');
    	$grupofamiliar->servicios_basicos=$request->get('servicios_basicos');
    	$grupofamiliar->hermano_nombre=$request->get('hermano_nombre');
    	$grupofamiliar->hermano_apellido=$request->get('hermano_apellido');
    	$grupofamiliar->hermano_edad=$request->get('hermano_edad');
    	$grupofamiliar->hermano_estudios=$request->get('hermano_estudios');
    	$grupofamiliar->hermano_trabajo=$request->get('hermano_trabajo');
    	$grupofamiliar->otros_familiares=$request->get('otros_familiares');
    	$grupofamiliar->relacion_familiar=$request->get('relacion_familiar');
    	$grupofamiliar->relacion_hermanos=$request->get('relacion_hermanos');
    	
	$grupofamiliar->update();

	return Redirect::to('instituto/grupofamiliar');

    }

    public function destroy($id)
    {
    	$grupofamiliar=GrupoFamiliar::FindOrFail($id);
    	$grupofamiliar->condicion='Inactivo';
    	$grupofamiliar->update();
    	return Redirect::to('instituto/grupofamiliar');
    }
}
