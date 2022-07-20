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
            'niver.required' => 'Insira a Data de Aniversário',
            'endereco.required' => 'Insira um end',
            'tell.required' => 'Digite um telefone',
            'redes_sociais.required' => 'Insira uma rede social',
            'membro_igreja.required' => 'Insira o campo',
            'observacoes.required' => 'Campo Requerido',
            'data_membro.required' => 'Insira uma data',
            'niver_casamento.required' => 'Insira uma data',

            
           
        ];
    }
}
