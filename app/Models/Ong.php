<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'estado',
        'causa_id'
    ];

    public function causa() : HasOne {
        return $this -> hasOne(Causa::class);
    }
}
