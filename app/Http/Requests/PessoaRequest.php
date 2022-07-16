<?php

namespace App\Http\Requests;

class PessoaRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'nome' => 'required',
            'endereco' => 'min:2',
            'tell' => 'min:10',
            'redes_sociais' => 'min:2',
            'membro_igreja' => 'min:2',
            'imagem' => '',
            'niver' => 'required|min:10',
            'data_membro' => 'min:10',
            'observacoes' => 'min:2',
            'niver_casamento' => 'min:10',
            'tipo' => 'required|min:0,1',
            'casado_id' => 'exists:pessoas,id'
        ];
    }
}
