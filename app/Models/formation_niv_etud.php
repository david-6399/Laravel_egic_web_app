<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formation_niv_etud extends Model
{
    use HasFactory;
    protected $table='formation_niv_etuds';

    protected $fillable = [
        'formation_id',
        'niv_etudiant_id'
    ];

    protected $primary = ['formation_id','niv_etudiant_id'];
}
