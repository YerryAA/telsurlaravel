<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestGrupoFamiliar extends Request
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
            'estado_padres'=>'required|max:100',
            'servicios_basicos'=>'required|max:2',
            'hermano_nombre'=>'max:100',
            'hermano_apellido'=>'max:100',
            'hermano_edad'=>'max:11',
            'hermano_estudios'=>'max:100',
            'hermano_trabajo'=>'max:100',
            'otros_familiares'=>'max:100',
            'relacion_familiar'=>'max:100',
            'relacion_hermanos'=>'max:100'
        ];
    }
}
