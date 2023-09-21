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
        'telefone_id',
        'endereco_id',
        'cnpj',
        'causa_id',
        'campanha_id',
        'vaga_id',
        'descricaoOng'
    ];
}
