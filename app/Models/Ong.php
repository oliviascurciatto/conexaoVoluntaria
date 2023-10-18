<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ong extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'cnpj',
        'senha',
        'imagem',
        'telefone_id',
        'endereco_id',
        'causa_id',
        'campanha_id',
        'vaga_id',
        'descricaoOng'
    ];

    public function telefone()
    {
        return $this->hasOne(Telefone::class);
    }

    public function campanha() : HasMany {
        return $this-> hasMany(Campanha::class);
    }
}
