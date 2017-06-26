<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\Estudiante;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use TelSUR\Http\Requests\FormRequestEstudiante;

use DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class EstudianteController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$datos_estudiantes=DB::table('datos_estudiantes as de')
    		->join('tipo_inscripcion as ti','de.idtipo_inscripcion','=','ti.idtipo_inscripcion')
    		->select('de.iddatos_estudiantes','ti.idtipo_inscripcion','ti.tipo_inscripcion as tipoinscripcion','de.nombres','de.apellidos','de.cedula','de.genero','de.fecha_nacimiento','de.edad','de.anos_calificacion','de.carnet','de.becado','de.tipo_organismo','de.posee_canaima','de.lateralidad','de.orden_nacimiento','de.esterilizado','de.hijos','de.dieta')
    		->where('de.nombres','LIKE','%'.$query.'%')
    		->orderBy('iddatos_estudiantes','desc')
    		->paginate(7);
    		return view('instituto.estudiantes.index',["datos_estudiantes"=>$datos_estudiantes,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$tipo_inscripcion=DB::table('tipo_inscripcion')->where('condicion','=','1')->get();

    	return view('instituto.estudiantes.create',["tipo_inscripcion"=>$tipo_inscripcion]);
    }

    public function store(FormRequestEstudiante $request)
    {
    	$datos_estudiantes= new Estudiante; //Modelo
    	$datos_estudiantes->idtipo_inscripcion=$request->get('idtipo_inscripcion');
    	$datos_estudiantes->nombres=$request->get('nombres');
    	$datos_estudiantes->apellidos=$request->get('apellidos');
    	$datos_estudiantes->cedula=$request->get('cedula');
    	$datos_estudiantes->genero=$request->get('genero');
    	$datos_estudiantes->edad=$request->get('edad');
    	$mytime=Carbon::now('America/Caracas');
	$datos_estudiantes->fecha_nacimiento=$mytime->toDateTimeString();
	$datos_estudiantes->edad=$request->get('edad');
	$datos_estudiantes->anos_calificacion=$request->get('anos_calificacion');
	$datos_estudiantes->carnet=$request->get('carnet');
	$datos_estudiantes->becado=$request->get('becado');
	$datos_estudiantes->tipo_organismo=$request->get('tipo_organismo');
	$datos_estudiantes->posee_canaima=$request->get('posee_canaima');
	$datos_estudiantes->lateralidad=$request->get('lateralidad');
	$datos_estudiantes->orden_nacimiento=$request->get('orden_nacimiento');
	$datos_estudiantes->esterilizado=$request->get('esterilizado');
	$datos_estudiantes->hijos=$request->get('hijos');
	$datos_estudiantes->dieta=$request->get('dieta');
          $datos_estudiantes->condicion='1';
    	$datos_estudiantes->save();

	return Redirect::to('instituto/estudiantes');
    }

    public function show($id)
    {
    	return view('instituto.estudiantes.show',["datos_estudiantes"=>Estudiante::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$datos_estudiantes=Estudiante::findOrFail($id);
    	$tipo_inscripciones=DB::table('tipo_inscripcion')->where('condicion','=','1')->get();
    	return view('instituto.estudiantes.edit',["datos_estudiantes"=>$datos_estudiantes,"tipo_inscripciones"=>$tipo_inscripciones]);
    }

    public function update(FormRequestEstudiante $request, $id)
    {
    	$datos_estudiantes=Estudiante::findOrFail($id);

	$datos_estudiantes->idtipo_inscripcion=$request->get('idtipo_inscripcion');
    	$datos_estudiantes->nombres=$request->get('nombres');
    	$datos_estudiantes->apellidos=$request->get('apellidos');
    	$datos_estudiantes->cedula=$request->get('cedula');
    	$datos_estudiantes->genero=$request->get('genero');
    	$datos_estudiantes->edad=$request->get('edad');
    	$mytime=Carbon::now('America/Caracas');
	$datos_estudiantes->fecha_nacimiento=$mytime->toDateTimeString();
	$datos_estudiantes->edad=$request->get('edad');
	$datos_estudiantes->anos_calificacion=$request->get('anos_calificacion');
	$datos_estudiantes->carnet=$request->get('carnet');
	$datos_estudiantes->becado=$request->get('becado');
	$datos_estudiantes->tipo_organismo=$request->get('tipo_organismo');
	$datos_estudiantes->posee_canaima=$request->get('posee_canaima');
	$datos_estudiantes->lateralidad=$request->get('lateralidad');
	$datos_estudiantes->orden_nacimiento=$request->get('orden_nacimiento');
	$datos_estudiantes->esterilizado=$request->get('esterilizado');
	$datos_estudiantes->hijos=$request->get('hijos');
	$datos_estudiantes->dieta=$request->get('dieta');
    	
	$datos_estudiantes->update();

	return Redirect::to('instituto/estudiantes');

    }

    public function destroy($id)
    {
    	$datos_estudiantes=Estudiante::FindOrFail($id);
    	$datos_estudiantes->condicion='Inactivo';
    	$datos_estudiantes->update();
    	return Redirect::to('instituto/estudiantes');
    }
}
