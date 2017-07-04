<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\Asistencia;
use Illuminate\Support\Facades\Redirect;
use TelSUR\Http\Requests\FormRequestAsistencia;
use DB;

class AsistenciaController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }

    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$asistencia=DB::table('asistencia as a')
    		->join('empleado as e','a.idempleado','=','e.idempleado')
    		->select('a.idasistencia','e.idempleado','e.empleado_nombre as empleado','e.empleado_nombre','a.hora_entrada','a.hora_salida','a.suplente','a.observacion','a.retardo','a.permiso_personal','a.permiso_justificado')
    		->where('e.empleado_nombre','LIKE','%'.$query.'%')
    		->orderBy('idasistencia','desc')
    		->paginate(7);
    		return view('instituto.asistencia.index',["asistencia"=>$asistencia,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$empleados=DB::table('empleado')->where('condicion','=','1')->get();

    	return view('instituto.asistencia.create',["empleados"=>$empleados]);
    }

    public function store(FormRequestAsistencia $request)
    {
    	$asistencia= new Asistencia;
    	$asistencia->idempleado=$request->get('idempleado');
    	$asistencia->hora_entrada=$request->get('hora_entrada');
    	$asistencia->hora_salida=$request->get('hora_salida');
    	$asistencia->suplente=$request->get('suplente');
    	$asistencia->observacion=$request->get('observacion');
    	$asistencia->retardo=$request->get('retardo');
	$asistencia->permiso_personal=$request->get('permiso_personal');
	$asistencia->permiso_justificado=$request->get('permiso_justificado');
             $asistencia->condicion='1';
    	$asistencia->save();

	return Redirect::to('instituto/asistencia');
    }

    public function show($id)
    {
    	return view('instituto.asistencia.show',["asistencia"=>Asistencia::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$asistencia=Asistencia::findOrFail($id);
    	$empleados=DB::table('empleado')->where('condicion','=','1')->get();
    	return view('instituto.asistencia.edit',["asistencia"=>$asistencia,"empleados"=>$empleados]);
    }

    public function update(FormRequestAsistencia $request, $id)
    {
    	$asistencia=Asistencia::findOrFail($id);

	$asistencia->idempleado=$request->get('idempleado');
    	$asistencia->hora_entrada=$request->get('hora_entrada');
    	$asistencia->hora_salida=$request->get('hora_salida');
    	$asistencia->suplente=$request->get('suplente');
    	$asistencia->observacion=$request->get('observacion');
    	$asistencia->retardo=$request->get('retardo');
	$asistencia->permiso_personal=$request->get('permiso_personal');
	$asistencia->permiso_justificado=$request->get('permiso_justificado');
	$asistencia->update();

	return Redirect::to('instituto/asistencia');

    }

    public function destroy($id)
    {
    	$asistencia=Asistencia::FindOrFail($id);
    	$asistencia->condicion='0';
    	$asistencia->update();
    	return Redirect::to('instituto/asistencia');
    }
}
