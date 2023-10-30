<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Voluntario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'senha',
        'imagem',
        'sobre',
        'telefone',
        'cidade',
        'estado',
        'genero_id',
        'habilidade_id'
    ];

    public function genero() : HasOne {
        return $this -> hasOne(Genero::class);
    }

    public function habilidade() : HasOne {
        return $this -> hasOne(Habilidade::class);
    }
}
