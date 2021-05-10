<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyJr extends Model
{
    use HasFactory;

    /**
     * 
     * Função que define o relacionamento entre empresaJunior e federacao.
     */
    public function federation(){
        return $this->belongsTo(Federation::class);
    }
}
