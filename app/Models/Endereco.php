<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function ong()
    {
        return $this->hasMany(Ong::class);
    }
    public function voluntario()
    {
        return $this->hasMany(Voluntario::class);
    }
}
