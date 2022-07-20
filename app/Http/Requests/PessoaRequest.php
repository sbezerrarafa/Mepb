<?php

namespace App\Http\Requests;

class PessoaRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'nome' => 'required',
            'endereco' => 'required|min:2',
            'tell' => 'required|min:10',
            'redes_sociais' => 'required|min:2',
            'membro_igreja' => 'required|min:2',
            'imagem' => '',
            'niver' => 'required|min:10',
            'data_membro' => 'required|min:10',
            'observacoes' => 'required|min:2',
            'casado_com' => 'required|min:2',
            'niver_casamento' => 'required|min:10',
            'tipo' => 'required|min:0,1'
        ];
    }
}
