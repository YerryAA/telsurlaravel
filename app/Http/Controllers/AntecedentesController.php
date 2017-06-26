<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\Antecedentes;
use Illuminate\Support\Facades\Redirect;
use TelSUR\Http\Requests\FormRequestAntecedentes;
use DB;

class AntecedentesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$antecedentes=DB::table('antecedentes as a')
    		->join('datos_estudiantes as de','a.iddatos_estudiantes','=','de.iddatos_estudiantes')
    		->select('a.idantecedentes','de.iddatos_estudiantes','de.nombres as nombres','a.tipo_embarazo','a.tipo_parto','a.desarrollo_psicomotor','a.desarrollo_lenguaje','a.primeras_palabras','a.edad_primeraspalabras','a.antecedentes_saludge','a.antecedentes_saluds','a.personalidad','a.quejas')
    		->where('de.nombres','LIKE','%'.$query.'%')
    		->orderBy('idantecedentes','desc')
    		->paginate(7);
    		return view('instituto.antecedentes.index',["antecedentes"=>$antecedentes,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$datos_estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();

    	return view('instituto.antecedentes.create',["datos_estudiantes"=>$datos_estudiantes]);
    }

    public function store(FormRequestAntecedentes $request)
    {
    	$antecedentes= new Antecedentes; //Modelo
    	$antecedentes->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$antecedentes->tipo_embarazo=$request->get('tipo_embarazo');
    	$antecedentes->tipo_parto=$request->get('tipo_parto');
    	$antecedentes->desarrollo_psicomotor=$request->get('desarrollo_psicomotor');
    	$antecedentes->desarrollo_lenguaje=$request->get('desarrollo_lenguaje');
    	$antecedentes->primeras_palabras=$request->get('primeras_palabras');
    	
	$antecedentes->edad_primeraspalabras=$request->get('edad_primeraspalabras');
	$antecedentes->antecedentes_saludge=$request->get('antecedentes_saludge');
	$antecedentes->antecedentes_saluds=$request->get('antecedentes_saluds');
	$antecedentes->personalidad=$request->get('personalidad');
	$antecedentes->quejas=$request->get('quejas');
	$antecedentes->condicion='1';
    	$antecedentes->save();

	return Redirect::to('instituto/antecedentes');
    }

    public function show($id)
    {
    	return view('instituto.antecedentes.show',["antecedentes"=>Antecedentes::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$antecedentes=Antecedentes::findOrFail($id);
    	$estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();
    	return view('instituto.antecedentes.edit',["antecedentes"=>$antecedentes,"estudiantes"=>$estudiantes]);
    }

    public function update(FormRequestAntecedentes $request, $id)
    {
    	$antecedentes=Antecedentes::findOrFail($id);

	$antecedentes->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$antecedentes->tipo_embarazo=$request->get('tipo_embarazo');
    	$antecedentes->tipo_parto=$request->get('tipo_parto');
    	$antecedentes->desarrollo_psicomotor=$request->get('desarrollo_psicomotor');
    	$antecedentes->desarrollo_lenguaje=$request->get('desarrollo_lenguaje');
    	$antecedentes->primeras_palabras=$request->get('primeras_palabras');
    	
	$antecedentes->edad_primeraspalabras=$request->get('edad_primeraspalabras');
	$antecedentes->antecedentes_saludge=$request->get('antecedentes_saludge');
	$antecedentes->antecedentes_saluds=$request->get('antecedentes_saluds');
	$antecedentes->personalidad=$request->get('personalidad');
	$antecedentes->quejas=$request->get('quejas');
    	
	$antecedentes->update();

	return Redirect::to('instituto/antecedentes');

    }

    public function destroy($id)
    {
    	$antecedentes=Antecedentes::FindOrFail($id);
    	$antecedentes->condicion='Inactivo';
    	$antecedentes->update();
    	return Redirect::to('instituto/antecedentes');
    }
}
