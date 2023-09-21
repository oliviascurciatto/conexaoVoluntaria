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
        'telefone-id',
        'genero_id',
        'endereco_id',
        'cpf',
        'habilidade_id',
        'causa_id'
    ];
}
