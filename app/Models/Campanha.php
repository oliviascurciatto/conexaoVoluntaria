<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campanha extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'nomeCampanha',
        'descricaoCampanha',
        'encerra_em',
        'ong_id'
    ];

    public function ong() : HasMany {
        return $this -> hasMany(Ong::class);
    }
}
