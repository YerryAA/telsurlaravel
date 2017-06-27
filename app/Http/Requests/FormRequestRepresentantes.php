<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestRepresentantes extends Request
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
            'representantes_nombre'=>'required|max:100',
            'representantes_apellido'=>'required|max:100',
            'representantes_cedula'=>'required|max:11',
            'representantes_edad'=>'required|max:11',
            'representantes_fechanacimiento'=>'required|max:100',
            'representantes_paisnacimiento'=>'required|max:100',
            'representantes_nacionalidad'=>'required|max:100',
            'representantes_direccion'=>'required|max:100',
            'representantes_parentesco'=>'required|max:100',
            'representantes_ocupacion'=>'required|max:100',
            'representantes_direcionlaboral'=>'required|max:100'
        ];
    }
}
