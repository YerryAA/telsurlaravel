<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestTallas extends Request
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
            'talla_pantalon'=>'max:45',
            'talla_camisa'=>'max:45',
            'talla_zapado'=>'max:45'
        ];
    }
}
