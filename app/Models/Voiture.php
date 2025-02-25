<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    /** @use HasFactory<\Database\Factories\VoitureFactory> */
    use HasFactory;
    protected $fillable = [
        'marque',
        'vitesse',
        
    ];

}
