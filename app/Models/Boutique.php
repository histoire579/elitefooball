<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;
    protected $fillable = [
        'lieu',
        'telephone',
        'horaire',
        'maillot_v',
        'gajet_v',
        'tikect_v'
    ];

    public function club(){
        return $this->hasMany('App\Models\Club');
    }
}
