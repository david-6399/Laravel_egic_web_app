<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_niv_etud extends Model
{
    use HasFactory;
    protected $table ='user_niv_etuds';
    protected $fillable = [
        'user_id',
        'niv_etud_id'
    ];
    protected $primary = ['user_id','niv_etud_id'];
}
