<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestDireccion extends Request
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
             'iddatos_estudiantes'=>'required',
            'direccion'=>'required|max:200',
            'pais_nacimiento'=>'required|max:100',
            'estado'=>'required|max:100',
            'nacionalidad'=>'required|max:100'
        ];
    }
}
