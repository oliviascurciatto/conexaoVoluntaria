<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rua extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeRua'
    ];

    public function endereco() :BelongsTo
    {
        return $this-> belongsTo(Endereco::class);
    }
}
