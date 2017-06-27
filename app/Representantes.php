<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class Representantes extends Model
{
    protected $table='representantes';

	protected $primaryKey='idrepresentantes';

    	public $timestamps=false;

    	protected $fillable=[
    		'iddatos_estudiantes',
    		'representantes_nombre',
    		'representantes_apellido',
    		'representantes_cedula',
    		'representantes_edad',
    		'representantes_fechanacimiento',
    		'representantes_paisnacimiento',
    		'representantes_nacionalidad',
    		'representantes_direccion',
    		'representantes_parentesco',
    		'representantes_ocupacion',
    		'representantes_dereccionlaboral'
    	];

    	protected $guarded=[

	];
}
