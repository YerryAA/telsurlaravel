<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	protected $table='empleado';

	protected $primaryKey='idempleado';

    	public $timestamps=false;

    	protected $fillable=[
    		'empleado_nombre',
    		'empleado_apellido',
    		'empleado_cedula',
    		'empleado_horario',
    		'empleado_estatus',
    		'empleado_cargo'
    	];

    	protected $guarded=[

	];
}
