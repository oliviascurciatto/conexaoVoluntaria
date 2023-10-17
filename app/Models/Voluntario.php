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
        'email',
        'cpf',
        'senha',
        'imagem',
        'telefone-id',
        'genero_id',
        'endereco_id',
        'habilidade_id'
    ];

    public function telefone() :HasOne
    {
        return $this->hasOne(Telefone::class);
    }
    public function endereco() :HasOne
    {
        return $this->hasOne(Endereco::class);
    }
    public function genero() :HasOne
    {
        return $this->hasOne(Genero::class);
    }
    public function habilidade() : HasOne 
    {
        return $this->hasOne(Habilidade::class);    
    }
}
