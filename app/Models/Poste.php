<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle'
    ];

    public function detail_club_saison(){
        return $this->hasMany('App\Models\DetailClubSaison');
    }
}
