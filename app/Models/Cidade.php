<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeCidade',
        'estado_id'
    ];

    public function endereco(){
        return $this-> belongsTo(Endereco::class);
    }
}
