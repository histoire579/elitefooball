<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'titre',
        'titre_en',
        'message',
        'message_en',
        'slug'
    ];
}
