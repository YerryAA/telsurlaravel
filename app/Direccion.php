<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table='direccion';

	protected $primaryKey='iddireccion';

    	public $timestamps=false;

    	protected $fillable=[
    		'iddatos_estudiantes',
    		'direccion',
    		'pais_nacimiento',
    		'estado',
    		'nacionalidad'
    	];

    	protected $guarded=[

	];
}
