<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Campanha extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'nomeCampanha',
        'descricaoCampanha',
        'encerra_em',
        'chavePix',
        'ong_id'
    ];

    public function ong() : HasOne{
        return $this -> hasOne(Ong::class);
    }

    
}
