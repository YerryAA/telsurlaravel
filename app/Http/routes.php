<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('pdf', function () {

	$empleados = TelSUR\empleado::all();

	$pdf = PDF::loadView('vista', ['empleados' => $empleados]);
	return $pdf->download('archivo.pdf');
});*/

Route::group(['prefix' => 'instituto', 'middleware' => ['auth', 'secretaria']], function(){
	Route::get('/', 'EmpleadoController@index');
	Route::get('/', 'DiscapacidadController@index');

});

Route::group(['prefix' => 'instituto', 'middleware' => ['auth', 'is_admin']], function(){
	Route::get('/', 'EmpleadoController@index');
	Route::get('/', 'DiscapacidadController@index');

});

Route::group(['prefix' => 'instituto', 'middleware' => ['auth', 'personalins']], function(){
	Route::get('/', 'EmpleadoController@index');
	Route::get('/', 'DiscapacidadController@index');

});



Route::resource('instituto/inicio','InicioController');
Route::resource('instituto/empleado','EmpleadoController');
Route::resource('instituto/asistencia','AsistenciaController');
Route::resource('instituto/estudiantes','EstudianteController');
Route::resource('instituto/antecedentes','AntecedentesController');
Route::resource('instituto/discapacidades','DiscapacidadController');
Route::resource('instituto/tallas','TallasController');
Route::resource('instituto/grupofamiliar','GrupoFamiliarController');
Route::resource('instituto/transporte','TransporteController');
Route::resource('instituto/representantes','RepresentantesController');
Route::auth();

Route::get('/home', 'HomeController@index');


