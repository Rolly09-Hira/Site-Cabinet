<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servext extends Model
{
    use HasFactory;
    protected $table = 'servext';
    protected $fillable = [
        'id_ext',
        'nom_ext',
        'desc_ext',
        'image_ext',
        'avantage',
        'autre'
    ];
}
