<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table='etudiants';
    protected $fillable = [
        'name',
        'adresse',
        'email',
        'contact',
        'categorie',
        'fb',
        'age',
        'option',
        'Module',
        'Niveau',
        'Image',

    ];
}
