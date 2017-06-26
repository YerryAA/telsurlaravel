<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestAntecedentes extends Request
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
            'tipo_embarazo'=>'required|max:100',
            'tipo_parto'=>'required|max:100',
            'desarrollo_psicomotor'=>'required|max:100',
            'desarrollo_lenguaje'=>'required|max:100',
            'primeras_palabras'=>'required|max:100',
            'edad_primeraspalabras'=>'required|max:2',
            'antecedentes_saludge'=>'required|max:100',
            'antecedentes_saluds'=>'required|max:100',
            'personalidad'=>'required|max:100',
            'quejas'=>'required|max:100'
        ];
    }
}
