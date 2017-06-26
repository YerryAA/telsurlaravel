<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\Tallas;
use Illuminate\Support\Facades\Redirect;
use TelSUR\Http\Requests\FormRequestTallas;
use DB;

class TallasController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$talla=DB::table('tallas as t')
    		->join('datos_estudiantes as de','t.iddatos_estudiantes','=','de.iddatos_estudiantes')
    		->select('t.idtallas','de.iddatos_estudiantes','de.nombres as nombres','t.talla_pantalon','t.talla_camisa','t.talla_zapato')
		->where('de.nombres','LIKE','%'.$query.'%')
    		->orderBy('idtallas','desc')
    		->paginate(7);
    		return view('instituto.tallas.index',["talla"=>$talla,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$datos_estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();

    	return view('instituto.tallas.create',["datos_estudiantes"=>$datos_estudiantes]);
    }

    public function store(FormRequestTallas $request)
    {
    	$talla= new Tallas; //Modelo

    	$talla->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$talla->talla_pantalon=$request->get('talla_pantalon');
    	$talla->talla_camisa=$request->get('talla_camisa');
    	$talla->talla_zapato=$request->get('talla_zapato');

	$talla->condicion='1';
    	$talla->save();

	return Redirect::to('instituto/tallas');
    }

    public function show($id)
    {
    	return view('instituto.tallas.show',["tallas"=>Tallas::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$talla=Tallas::findOrFail($id);
    	$estudiantes=DB::table('datos_estudiantes')->where('condicion','=','1')->get();
    	return view('instituto.tallas.edit',["talla"=>$talla,"estudiantes"=>$estudiantes]);
    }

    public function update(FormRequestTallas $request, $id)
    {
    	$talla=Tallas::findOrFail($id);

	$talla->iddatos_estudiantes=$request->get('iddatos_estudiantes');
    	$talla->talla_pantalon=$request->get('talla_pantalon');
    	$talla->talla_camisa=$request->get('talla_camisa');
    	$talla->talla_zapato=$request->get('talla_zapato');

	$talla->update();

	return Redirect::to('instituto/tallas');

    }

    public function destroy($id)
    {
    	$talla=Tallas::FindOrFail($id);
    	$talla->condicion='Inactivo';
    	$talla->update();
    	return Redirect::to('instituto/tallas');
    }
}
