<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeOng',
        'cnpj',
        'email',
        'senha',
        'imagem',
        'sobre',
        'telefone',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado'
    ];
}
