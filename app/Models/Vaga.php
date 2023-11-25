<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeVaga',
        'quantidade',
        'encerra_em',
        'descricaoVaga',
        'habilidade_id',
        'ong_id'
    ];

    public function ong() : BelongsTo{
    return $this -> belongsTo(Ong::class);
    }
}
