<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Sanctum\HasApiTokens;

// Modèle de la table "rapport_visite"
class Rapport extends model
{
    use  HasFactory;

    public $table = 'rapport_visite';
    protected $primaryKey = 'RAP_NUM';
    public $timestamps = false;
    public $incrementing = false;
}