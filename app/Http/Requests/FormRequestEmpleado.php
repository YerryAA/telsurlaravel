<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestEmpleado extends Request
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
            'empleado_nombre'=>'required|max:100',
            'empleado_apellido'=>'required|max:100',
            'empleado_cedula'=>'required|max:11',
            'empleado_horario'=>'required|max:100',
            'empleado_estatus'=>'required|max:100',
            'empleado_cargo'=>'required|max:100'
        ];
    }
}
