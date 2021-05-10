<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federation extends Model
{
    use HasFactory;

    /**
     * 
     * Função que define o relacionamento entre federação e empresaJunior.
     */
    public function companyJr(){
        return $this->hasMany(companyJr::class);
    }

    /**
     * 
     * Função que define o relacionamento entre federação e estado.
     */
    public function state(){
        return $this->belongsTo(State::class);
    }
}
