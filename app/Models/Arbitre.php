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
        'pays_id',
        'lieu_nais',
        'status',
        'annee_debut_elite'
    ];

    public function pays(){
        return $this->belongsTo('App\Models\Pays','pays_id');
    }

    public function match(){
        return $this->hasMany('App\Models\Match');
    }
}
