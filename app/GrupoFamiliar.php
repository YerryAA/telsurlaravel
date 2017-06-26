<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class GrupoFamiliar extends Model
{
     protected $table='grupo_familiar';

	protected $primaryKey='idgrupo_familiar';

    	public $timestamps=false;

    	protected $fillable=[
    		'iddatos_estudiantes',
    		'estado_padres',
    		'servicios_basicos',
    		'hermano_nombre',
    		'hermano_apellido',
    		'hermano_edad',
    		'hermano_estudios',
    		'hermano_trabajo',
    		'otros_familiares',
    		'relacion_familiar',
    		'relacion_hermanos'
    	];

    	protected $guarded=[

	];
}
