<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Genero extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeGenero'
    ];

    public function voluntario() : BelongsTo {
        return $this -> belongsTo(Voluntario::class);
    }
}
