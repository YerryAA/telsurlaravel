<?php

namespace TelSUR;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $table='telefono';

	protected $primaryKey='idtelefono';

    	public $timestamps=false;

    	protected $fillable=[
    		'idrepresentantes',
    		'telefono_uno',
    		'telefono_dos',
    		'telefono_local'
    	];

    	protected $guarded=[

	];
}
