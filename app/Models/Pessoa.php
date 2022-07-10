<?php

namespace App\Models;

use App\Enums\TipoPessoa;
use Carbon\Carbon;

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

    public function setNiverAttribute($value)
    {
        $this->attributes['niver'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    public function getNiverAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
    }

    public function scopeFilterMembro($query)
    {
        return $query->where('tipo', TipoPessoa::MEMBRO)->orderBy('nome')->paginate(10);
    }

    public function scopeFilterVisitante($query)
    {
        return $query->where('tipo', TipoPessoa::VISITANTE)->orderBy('nome')->paginate(10);
    }

    public function scopeFilterAniversariante()
    {
        $dataAtualCarbon = Carbon::now();
        $aniversariantesDoMes = Pessoa::whereMonth('niver', $dataAtualCarbon->month)->get();

        return $aniversariantesDoMes;
    }
}
