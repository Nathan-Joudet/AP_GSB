<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Modèle de la table "praticien"
class Praticien extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = 'praticien'; // Table = "praticien"
    protected $primaryKey = 'PRA_NUM'; // Clé Primaire = "PRA_NUM"
    public $timestamps = false; // Aucun horodatage
    public $incrementing = false; // Clé primaire ≠ entier auto-incrémenté
}




