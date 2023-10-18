<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Habilidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoHabilidade'
    ];

    public function voluntario() :BelongsTo
    {
        return $this-> belongsTo(Voluntario::class);
    }

    public function vagas() : BelongsTo {
        return $this -> belongsTo(vagas::class);
    }
}
