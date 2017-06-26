<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestDiscapacidad extends Request
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
            'discapacidad_nombre'=>'required|max:100',
            'convulsiona'=>'required|max:2',
            'alergico'=>'required|max:2',
            'toma_medicamento'=>'required|max:2'
        ];
    }
}
