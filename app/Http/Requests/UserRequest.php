<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'imagen'     => 'image | required | max:2000 ',
            'name' => 'min:3 | max:20 | required'
        ];
        $messages = array(
            'imagen.max' => '¡Tamño maximo 2mb Gracias!',
        );
    }
}
