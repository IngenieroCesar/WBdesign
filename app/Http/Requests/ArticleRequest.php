<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
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
            'title'     => 'min:5 | max:200 | required | unique:articles',
            'category_id'  => 'required',
            'content'   => 'min:0 | required',
        ];
        $messages = array(
            'imagen.max' => '¡Tamño maximo 2mb Gracias!',
        );
    }
}
