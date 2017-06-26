<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestEstudiante extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'idtipo_inscripcion'=>'required',
            'nombres'=>'required|max:100',
            'apellidos'=>'required|max:100',
            'cedula'=>'required|max:11',
            'genero'=>'required|max:1',
            'edad'=>'required|max:2',
            'anos_calificacion'=>'required|max:4',
            'carnet'=>'required|max:2',
            'becado'=>'required|max:2',
            'tipo_organismo'=>'required|max:200',
            'posee_canaima'=>'required|max:2',
            'lateralidad'=>'required|max:20',
            'orden_nacimiento'=>'required|max:20',
            'esterilizado'=>'required|max:2',
            'hijos'=>'required|max:2',
            'dieta'=>'required|max:2'
        ];
    }
}
