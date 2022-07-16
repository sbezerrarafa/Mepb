<?php

namespace App\Models;

class Casal extends BaseModel
{
    protected $table = 'casais';

    protected $fillable = [
        'pessoa_id',
        'casado_id',
    ];
}
