<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    /**
     * 
     * Função que define o relacionamento entre estado e federacao.
     */
    public function federation(){
        return $this->hasOne(Federation::class);
    }
}
