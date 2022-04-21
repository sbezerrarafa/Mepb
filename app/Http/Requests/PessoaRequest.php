<?php

namespace App\Http\Requests;

class PessoaRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'nome' => 'required',
            'endereco' =>'min:2',
            'tell' => 'min:10',
            'redes_sociais' => 'min:2',
            'membro_igreja' =>'min:2',
            'imagem' => 'image|mimes:png,jpg|max:2048',
            'niver' => 'required|min:10',
            'data_membro' => 'min:10',
            'observacoes' =>'min:2',
            'casado_com' => 'min:2',
            'niver_casamento' => 'min:10',
            'tipo' => 'required'
            
        ];
    }
}
