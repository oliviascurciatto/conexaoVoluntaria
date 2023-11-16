<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TipoUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoUser'
    ];

    public function user() :BelongsTo{
        return $this->belongsTo(User::class);
    }
}
