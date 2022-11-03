<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journee extends Model
{
    use HasFactory;
    protected $fillable = [
        'saison_id',
        'libelle'
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function match(){
        return $this->hasMany('App\Models\Match');
    }
}