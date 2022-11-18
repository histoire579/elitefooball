<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMatch extends Model
{
    use HasFactory;    
    protected $fillable = [
        'saison_id',
        'match_id',
        'detail'
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function match(){
        return $this->belongsTo('App\Models\Match','match_id');
    }
}
