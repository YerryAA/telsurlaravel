<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table='datos_estudiantes';

	protected $primaryKey='iddatos_estudiantes';

    	public $timestamps=false;

    	protected $fillable=[
    		'idtipo_inscripcion',
    		'nombres',
    		'apellidos',
    		'cedula',
    		'genero',
    		'fecha_nacimiento',
    		'edad',
    		'anos_calificacion',
    		'carnet',
    		'becado',
    		'tipo_organismo',
    		'posee_canaima',
    		'lateralidad',
    		'orden_nacionalidad',
    		'esterilizado',
    		'hijos',
    		'dieta',
    		'condicion'

    	];

    	protected $guarded=[

	];
}
