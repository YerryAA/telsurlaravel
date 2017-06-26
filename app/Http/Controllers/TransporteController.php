<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\Transporte;
use Illuminate\Support\Facades\Redirect;
use TelSUR\Http\Requests\FormRequestTransporte;
use DB;

class TransporteController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$transporte=DB::table('transporte as t')
    		->join('datos_estudiantes as de','t.iddatos_estudiantes','=','de.iddatos_estudiantes')
    		->select('t.idtransporte','de.iddatos_estudiantes','de.nombres as nombres','t.transporte_nombre','t.transporte_cedula','t.transporte_telefono','t.transporte_vehiculo')
		->where('de.nombres','LIKE','%'.$query.'%')
    		->orderBy('idtransporte','desc')
    		->paginate(7);
    		return view('instituto.transporte.index',["transporte"=>$transporte,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$datos_estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();

    	return view('instituto.transporte.create',["datos_estudiantes"=>$datos_estudiantes]);
    }

    public function store(FormRequestTransporte $request)
    {
    	$transporte= new Transporte; //Modelo

    	$transporte->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$transporte->transporte_nombre=$request->get('transporte_nombre');
    	$transporte->transporte_cedula=$request->get('transporte_cedula');
    	$transporte->transporte_telefono=$request->get('transporte_telefono');
	$transporte->transporte_vehiculo=$request->get('transporte_vehiculo');
	$transporte->condicion='1';
    	$transporte->save();

	return Redirect::to('instituto/transporte');
    }

    public function show($id)
    {
    	return view('instituto.transporte.show',["tallas"=>Transporte::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$transporte=Transporte::findOrFail($id);
    	$estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();
    	return view('instituto.transporte.edit',["transporte"=>$transporte,"estudiantes"=>$estudiantes]);
    }

    public function update(FormRequestTransporte $request, $id)
    {
    	$transporte=Transporte::findOrFail($id);

	$transporte->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$transporte->transporte_nombre=$request->get('transporte_nombre');
    	$transporte->transporte_cedula=$request->get('transporte_cedula');
    	$transporte->transporte_telefono=$request->get('transporte_telefono');
	$transporte->transporte_vehiculo=$request->get('transporte_vehiculo');
	
	$transporte->update();

	return Redirect::to('instituto/transporte');

    }

    public function destroy($id)
    {
    	$transporte=Transporte::FindOrFail($id);
    	$transporte->condicion='Inactivo';
    	$transporte->update();
    	return Redirect::to('instituto/transporte');
    }
}
