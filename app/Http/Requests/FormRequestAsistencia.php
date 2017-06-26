<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestAsistencia extends Request
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
            'idempleado'=>'required',
            'hora_entrada'=>'required|max:20',
            'hora_salida'=>'required|max:20',
            'suplente'=>'required|max:100',
            'observacion'=>'required|max:100',
            'retardo'=>'required|max:45',
            'permiso_personal'=>'max:45',
            'permiso_justificado'=>'max:45'
        ];
    }
}
