<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Telefone extends Model
{
    use HasFactory;

    protected $fillable = [
        'ddd',
        'numeroTelefone'
    ];

    public function telefone() : BelongsTo
    {
        return $this-> belongsTo(Voluntario::class);
    }
}
