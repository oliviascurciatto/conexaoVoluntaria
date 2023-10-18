<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Campanha extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeCampanha',
        'criada_em',
        'descricaoCampanha',
        'pix',
        'causa_id'
    ];

    public function ong() : BelongsTo {
        return $this-> belongsTo(Ong::class);
    }

    public function causa() : HasOne {
        return $this-> hasOne(Causa::class);
    }
}
