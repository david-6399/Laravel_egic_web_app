<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        
    ];
    public function formation(){
        return $this->hasone(formation::class,'cod_program','id');
    }

    
    public function module()
    {
        return $this->belongsToMany(module::class, 'program_moduls', 'program_id', 'module_id')
        ->as('program_module')->withTimestamps();
    }
    
}
