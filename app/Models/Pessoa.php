<?php

namespace App\Models;

use App\Enums\TipoPessoa;

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

    protected $appends = [
        'imagem',
    ];

    public function setImagemAttribute($value)
    {
        $this->attributes['imagem'] = $this->imagemUpload($value);
    }

    public function scopeFilterMembro($query)
    {
        return $query->where('tipo', TipoPessoa::MEMBRO)->orderBy('nome')->paginate(10);
    }

    public function scopeFilterVisitante($query)
    {
        return $query->where('tipo', TipoPessoa::VISITANTE)->orderBy('nome')->paginate(10);
    }
}
