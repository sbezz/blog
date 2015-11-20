<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
{
    public function authorize()
    {

        //Alterar para true
        return true;
    }

    public function rules()
    {
        return [
            //
            'title' => 'required|min:8',
            'content' => 'required'
            //,'tags'

        ];
    }
}
