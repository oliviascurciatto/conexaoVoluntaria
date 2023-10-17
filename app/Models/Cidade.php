<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeCidade',
        'estado_id'
    ];

    public function endereco() :BelongsTo
    {
        return $this-> belongsTo(Endereco::class);
    }
}
