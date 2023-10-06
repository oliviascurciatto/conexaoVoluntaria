<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $fillable = [
        'UF',
        'nomeEstado'
    ];

    public function endereco(){
        return $this-> belongsTo(Endereco::class);
    }
}
