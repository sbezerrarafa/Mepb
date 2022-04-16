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
            'nome.required' => 'Insira um Nome',
            'niver.required'=> 'Insita a Data de Aniversário'
            
        ];
    }
}
