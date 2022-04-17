<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'name.required' => 'Insira um Nome',
            'niver.required'=> 'Insira a Data de Aniversário'
            
        ];
    }
}
