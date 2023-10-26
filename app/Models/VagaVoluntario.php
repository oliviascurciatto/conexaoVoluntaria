<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VagaVoluntario extends Model
{
    use HasFactory;

    protected $fillable = [
        'vaga_id',
        'voluntario_id'
    ];

    
}
