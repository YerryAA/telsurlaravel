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



Route::resource('instituto/inicio','InicioController'); //Vista Principal
Route::resource('instituto/empleado','EmpleadoController'); //Vista a Secretaria
Route::resource('instituto/asistencia','AsistenciaController'); //Vista a Secretaria

Route::resource('instituto/estudiantes','EstudianteController'); //Vista a Estudiante
Route::resource('instituto/direccion','DireccionController'); //Vista a Estudiante
Route::resource('instituto/antecedentes','AntecedentesController'); //Vista a Estudiante
Route::resource('instituto/discapacidades','DiscapacidadController'); //Vista a Estudiante
Route::resource('instituto/tallas','TallasController'); //Vista a Estudiante
Route::resource('instituto/grupofamiliar','GrupoFamiliarController'); //Vista a Estudiante
Route::resource('instituto/transporte','TransporteController'); //Vista a Estudiante

Route::resource('instituto/representantes','RepresentantesController'); //Vista a Representante
Route::resource('instituto/telefono','TelefonoController'); //Vista a Representante
Route::auth();

Route::get('/home', 'HomeController@index');


