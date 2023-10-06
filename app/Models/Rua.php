<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rua extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeRua'
    ];

    public function endereco(){
        return $this-> belongsTo(Endereco::class);
    }
}
