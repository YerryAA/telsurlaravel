<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

use TelSUR\Telefono;
use Illuminate\Support\Facades\Redirect;
use TelSUR\Http\Requests\FormRequestTelefono;
use DB;

class TelefonoController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$telefono=DB::table('telefono as t')
    		->join('representantes as re','t.idrepresentantes','=','re.idrepresentantes')
    		->select('t.idtelefono','re.idrepresentantes','re.representantes_nombre as nombres','t.telefono_uno','t.telefono_dos','t.telefono_local')
		->where('re.representantes_nombre','LIKE','%'.$query.'%')
    		->orderBy('idtelefono','desc')
    		->paginate(7);
    		return view('instituto.telefono.index',["telefono"=>$telefono,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$representantes=DB::table('representantes')->where('condicion','=','1')->get();

    	return view('instituto.telefono.create',["representantes"=>$representantes]);
    }

    public function store(FormRequestTelefono $request)
    {
    	$telefono= new Telefono; //Modelo

    	$telefono->idrepresentantes=$request->get('idrepresentantes');
    	$telefono->telefono_uno=$request->get('telefono_uno');
    	$telefono->telefono_dos=$request->get('telefono_dos');
    	$telefono->telefono_local=$request->get('telefono_local');

	$telefono->condicion='1';
    	$telefono->save();

	return Redirect::to('instituto/telefono');
    }

    public function show($id)
    {
    	return view('instituto.telefono.show',["telefono"=>Telefono::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$telefono=Telefono::findOrFail($id);
    	$representantes=DB::table('representantes')->where('condicion','=','1')->get();
    	return view('instituto.telefono.edit',["telefono"=>$telefono,"representantes"=>$representantes]);
    }

    public function update(FormRequestTelefono $request, $id)
    {
    	$telefono=Telefono::findOrFail($id);

    	$telefono->telefono_uno=$request->get('telefono_uno');
    	$telefono->telefono_dos=$request->get('telefono_dos');
    	$telefono->telefono_local=$request->get('telefono_local');

	$telefono->update();

	return Redirect::to('instituto/telefono');

    }

    public function destroy($id)
    {
    	$telefono=Telefono::FindOrFail($id);
    	$telefono->condicion='Inactivo';
    	$telefono->update();
    	return Redirect::to('instituto/telefono');
    }
}
