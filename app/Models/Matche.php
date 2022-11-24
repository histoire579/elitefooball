<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;
    protected $fillable = [
        'saison_id',
        'competition_id',
        'journee_id',
        'phase_id',
        'stade_id',
        'club1_id',
        'club1_statut',
        'club2_id',
        'club2_statut',
        'arbitre1_id',
        'arbitre2_id',
        'arbitre3_id',
        'arbitre4_id',
        'date',
        'heure'
    ];

    public function saison()
    {
        return $this->belongsTo('App\Models\Saison', 'saison_id');
    }

    public function competition()
    {
        return $this->belongsTo('App\Models\Competition', 'competition_id');
    }

    public function journee()
    {
        return $this->belongsTo('App\Models\Journee', 'journee_id');
    }

    public function phase()
    {
        return $this->belongsTo('App\Models\Phase', 'phase_id');
    }

    public function stade()
    {
        return $this->belongsTo('App\Models\Stade', 'stade_id');
    }

    public function club1()
    {
        return $this->belongsTo('App\Models\Club', 'club1_id');
    }

    public function club2()
    {
        return $this->belongsTo('App\Models\Club', 'club2_id');
    }

    public function arbitre1()
    {
        return $this->belongsTo('App\Models\Arbitre', 'arbitre1_id');
    }

    public function arbitre2()
    {
        return $this->belongsTo('App\Models\Arbitre', 'arbitre2_id');
    }

    public function arbitre3()
    {
        return $this->belongsTo('App\Models\Arbitre', 'arbitre3_id');
    }

    public function arbitre4()
    {
        return $this->belongsTo('App\Models\Arbitre', 'arbitre4_id');
    }

    public function feuille_match()
    {
        return $this->hasMany('App\Models\FeuilleMatch');
    }

    public function detail_match()
    {
        return $this->hasMany('App\Models\DetailMatch');
    }

    public function statistique_joueur()
    {
        return $this->hasMany('App\Models\StatistiqueJoueur');
    }

    public function statistique_club()
    {
        return $this->hasMany('App\Models\StatistiqueClub');
    }
}