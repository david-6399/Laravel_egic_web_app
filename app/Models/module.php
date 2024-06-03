<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;
    protected $fillable = ([
        'name',
        'coefficient'
    ]);
    protected $table='modules';
    public function support_cours(){
        return $this->HasMany(support_cours::class,'cod_module','id');
    }

    /**
     * The roles that belong to the module
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function program()
    {
        return $this->belongsToMany(program::class, 'program_moduls', 'module_id', 'program_id')
        ->as('program_module')->withTimestamps();
    }
    
}
