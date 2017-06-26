<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
    protected $table='discapacidad';

	protected $primaryKey='iddiscapacidad';

    	public $timestamps=false;

    	protected $fillable=[
    		'iddatos_estudiantes',
    		'discapacidad_nombre',
    		'convulsiona',
    		'alergico',
    		'toma_meicamento'
    	];

    	protected $guarded=[

	];
}
