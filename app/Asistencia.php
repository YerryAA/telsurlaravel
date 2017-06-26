<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table='asistencia';

	protected $primaryKey='idasistencia';

    	public $timestamps=false;

    	protected $fillable=[
    		'idempleado',
    		'hora_entrada',
    		'hora_salida',
    		'suplente',
    		'observacion',
    		'retardo',
    		'permiso_personal',
    		'permiso_justificado'
    	];

    	protected $guarded=[

	];
}
