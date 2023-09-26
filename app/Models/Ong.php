<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'cnpj',
        'senha',
        'imagem',
        'pix',
        'telefone_id',
        'endereco_id',
        'causa_id',
        'campanha_id',
        'vaga_id',
        'descricaoOng'
    ];
}
