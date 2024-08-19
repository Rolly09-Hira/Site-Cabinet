<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Externalisation extends Model
{
    use HasFactory;
    protected $table='externalisation';
    protected $fillable = [
        'matricule',
        'commmercial',
        'nomentreprise',
        'nomclient',
        'activites',
        'contact',
        'mail',
        'fb',
        'adresse',
        'dureexistence',
        'nombrepersonnel',
        'chiffreaffaire',
        'regime',
        'statjur',
        'Domaine',
        'servicesouhaiter',
        'dureesouhaiter',
        'observation',

    ];
}
