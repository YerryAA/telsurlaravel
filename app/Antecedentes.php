<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class Antecedentes extends Model
{
    protected $table='antecedentes';

	protected $primaryKey='idantecedentes';

    	public $timestamps=false;

    	protected $fillable=[
    		'iddatos_estudiantes',
    		'tipo_embarazo',
    		'tipo_parto',
    		'desarrollo_psicomotor',
    		'desarrollo_lenguaje',
    		'primeras_palabras',
    		'edad_primeraspalabras',
    		'antecedentes_saludge',
    		'antecedentes_saluds',
    		'personalida',
    		'quejas',
    		'condicion'

    	];

    	protected $guarded=[

	];
}
