<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbitre extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'nom',
        'date_nais',
        'drapeau',
        'nationalite',
        'lieu_nais',
        'status',
        'annee_debut_elite'
    ];

    public function match(){
        return $this->hasMany('App\Models\Match');
    }

    public function resultat(){
        return $this->hasMany('App\Models\Resultat');
    }
}
