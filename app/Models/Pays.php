<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;
    protected $fillable = [
        'drapeau',
        'nom'
    ];

    public function arbitre(){
        return $this->hasMany('App\Models\Arbitre');
    }

    public function joueur(){
        return $this->hasMany('App\Models\Joueur');
    }
}
