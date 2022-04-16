<?php

namespace App\Http\Requests;

class PessoaRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'nome' => 'required',
            'niver' => 'required|min:10|date_format:d/m/Y',
            'endereco' =>'min:2',
            'tell' => 'min:15',
            'redes_social' => 'min:2',
            'membro_igreja' =>'min:2',
            'imagem' => 'required_without:img_destaque|image|mimes:png,jpg|max:2048',
            'data_membro' => 'min:10|date_format:d/m/Y',
            'observacoes' =>'min:2',
            'casad_com' => 'min:2',
            'niver_casamento' => 'min:10|date_format:d/m/Y',
            'tipo' => 'required|in:1,0'
        ];
    }
}
