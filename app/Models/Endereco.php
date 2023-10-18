<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'cidade_id',
        'estado_id',
        'rua_id',
        'complemento',
        'numero'
    ];

    public function ong() :BelongsTo
    {
        return $this->belongsTo(Ong::class);
    }
    public function voluntario() :BelongsTo
    {
        return $this->belongsTo(Voluntario::class);
    }
}
