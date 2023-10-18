<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Causa extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoCausa'
    ];

    public function ong() : BelongsTo {
        return $this-> belongsTo(Ong::class);
    }

    public function campanha() : BelongsTo {
        return $this-> belongsTo(Campanha::class);
    }
}
