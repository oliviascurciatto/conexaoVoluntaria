<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoHabilidade'
    ];

    public function voluntario(){
        return $this-> belongsTo(Voluntario::class);
    }
}
