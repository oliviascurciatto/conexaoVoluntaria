<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Habilidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeHabilidade',
    ];

    public function voluntario() : BelongsTo {
        return $this -> belongsTo(Voluntario::class);
    }

    public function vaga() : BelongsTo {
        return $this -> belongsTo(Vaga::class);
    }
}
