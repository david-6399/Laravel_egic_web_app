<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
    use HasFactory;
    

    

    protected $fillable = [
        'nome_forma',
        'duree_forma',
        'tarif_forma',
        'favoris',
        'cod_typeformation',
        'cod_program'
    ];
    
    public function program(){
        return $this->belongsto(program::class , 'cod_program','id');
    }





    protected static function boot() {
        parent::boot();

        static::deleting(function($formation) {
            $formation->program()->delete();
        });
    }

    protected $dates = ['created_at', 'updated_at', /* other timestamps if any */];



    public function type_formation(){
        return $this->belongsto(type_formation::class,'cod_typeformation','id');
    }
    
    
    public function débouché()
    {
        return $this->belongsToMany(débouché::class, 'formation_débouchés', 'formation_id', 'débouché_id')
        ->as('formation_débouché')
        ->withTimestamps();
    }
    
    public function niv_etudiant()
    {
        return $this->belongsToMany(niv_etudiant::class, 'formation_niv_etuds', 'formation_id', 'niv_etudiant_id')
        ->as('formation_niv_etud')
        ->withTimestamps();
    }

    /**
     * The roles that belong to the Formation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user()
    {
        return $this->belongsToMany(user::class, 'user_formation', 'formation_id', 'user_id')
        ->as('user_formation')
        ->withTimestamps();
    }

    public function comment(){
        return $this->hasmany(comment::class,'formation_id','id');
    }
    
   
}
