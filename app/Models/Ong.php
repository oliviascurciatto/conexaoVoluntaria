<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;

class Ong extends Model
{
    use HasFactory;
    use Notifiable;

    protected $guard = 'ongs';
    protected $fillable = [
        'nomeOng',
        'cnpj',
        'email',
        'senha',
        'imagem',
        'sobre',
        'telefone',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'causa_id'
    ];

    protected $hidden = [
        'senha',
    ];

    protected $casts = [
        'senha' => 'hashed',
    ];

    public function causa() : HasOne {
        return $this -> hasOne(Causa::class);
}

        
}
