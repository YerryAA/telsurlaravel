<?php

namespace TelSUR\Http\Requests;

use TelSUR\Http\Requests\Request;

class FormRequestTelefono extends Request
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
            'idrepresentantes'=>'required',
            'telefono_uno'=>'required|max:11',
            'telefono_dos'=>'max:11',
            'telefono_local'=>'required|max:11'
        ];
    }
}
