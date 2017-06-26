<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class Tallas extends Model
{
    protected $table='tallas';

	protected $primaryKey='idtallas';

    	public $timestamps=false;

    	protected $fillable=[
    		'iddatos_estudiantes',
    		'talla_pantalon',
    		'talla_camisa',
    		'talla_zapato'
    	];

    	protected $guarded=[

	];
}
