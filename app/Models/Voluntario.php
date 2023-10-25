<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeVoluntario',
        'cpf',
        'email',
        'senha',
        'imagem',
        'sobre',
        'telefone',
        'cidade',
        'estado'
    ];
}
