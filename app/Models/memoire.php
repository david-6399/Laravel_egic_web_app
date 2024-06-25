<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memoire extends Model
{
    use HasFactory;

    protected $table = 'memoires' ;

    protected $primary = 'id';

    protected $fillable = [
        'titre',
        'auteur',
        'date_de_présenté',
        'visitor',
        'memoire'
    ];
}
