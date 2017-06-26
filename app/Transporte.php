<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
     protected $table='transporte';

	protected $primaryKey='idtransporte';

    	public $timestamps=false;

    	protected $fillable=[
    		'iddatos_estudiantes',
    		'transporte_nombre',
    		'transporte_cedula',
    		'transporte_telefono',
    		'transporte_vehiculo'
    	];

    	protected $guarded=[

	];
}
