<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeuilleMatch extends Model
{
    use HasFactory;
    protected $fillable = [
        'match_id',
        'club_id',
        'joueur_id',
        'titularisation'
    ];

    public function match(){
        return $this->belongsTo('App\Models\Match','match_id');
    }

    public function club(){
        return $this->belongsTo('App\Models\Club','club_id');
    }

    public function joueur(){
        return $this->belongsTo('App\Models\Joueur','joueur_id');
    }
}
