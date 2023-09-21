<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeVaga',
        'quantidade',
        'criada_em',
        'descricaoVaga',
        'habilidade_id'
    ];
}
