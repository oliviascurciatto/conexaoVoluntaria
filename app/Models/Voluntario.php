<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'senha',
        'imagem',
        'telefone-id',
        'genero_id',
        'endereco_id',
        'habilidade_id'
    ];
}
