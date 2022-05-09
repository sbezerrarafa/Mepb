<?php

namespace App\Models;

class Pessoa extends BaseModel
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'endereco',
        'tell',
        'redes_sociais',
        'membro_igreja',
        'imagem',
        'niver',
        'data_membro',
        'observacoes',
        'casado_com',
        'niver_casamento',
        'tipo',
    ];

    public function setImagemAttribute($value)
    {       
        $this->attributes['imagem'] = $this->imagemUpload($value);
    }
}
