<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestTransporte extends Request
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
            'transporte_nombre'=>'required|max:100',
            'transporte_cedula'=>'required|max:11',
            'transporte_telefono'=>'required|max:11',
            'transporte_vehiculo'=>'required|max:200'
        ];
    }
}
