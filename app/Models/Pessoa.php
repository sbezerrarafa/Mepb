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
        'niverFaixa',
    ];

    public function setImagemAttribute($value)
    {
        $this->attributes['imagem'] = $this->imagemUpload($value);
    }

    // public function setNiverAttribute($value)
    // {
    //     $this->attributes['niver'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    // }

    public function getNiverFaixaAttribute($value)
    {
        $atributo = $this->attributes['niver'];
        return Carbon::parse($atributo)->age;
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

    public function scopeFilterVisitanteSemana()
        {
          return  $ultimasVisitas = Pessoa::whereBetween(
                'created_at',
                [
                    date('Y-m-d', strtotime("-7 days")) . " 00:00:00",
                    date("Y-m-d") . " 23:59:59"
                ]
            )
            ->where('tipo', TipoPessoa::VISITANTE);
           
        }     

        // public function scopeCalculaIdade($value)
        // {
            // $pessoas = Pessoa::all();

            // foreach($pessoas as $pessoa){
                // return Carbon::parse($value)->age;
            //     dd($result);
            // }
            // $aqui = Carbon::parse($niver->niver)->age;
        
            // dd($aqui);
        // }
}
