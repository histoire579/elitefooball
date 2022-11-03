<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'nom',
        'date_nais',
        'nationalite',
        'lieu_nais',
        'taille',
        'poids',
        'pied_fort'
    ];

    public function feuille_match(){
        return $this->hasMany('App\Models\FeuilleMatch');
    }

    public function detail_club_saison(){
        return $this->hasMany('App\Models\DetailClubSaison');
    }

    public function statistique_joueur(){
        return $this->hasMany('App\Models\StatistiqueJoueur');
    }

    public function palmares_joueur(){
        return $this->hasMany('App\Models\PalmaresJoueur');
    }
}
