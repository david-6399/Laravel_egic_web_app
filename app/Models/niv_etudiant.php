<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niv_etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function user(){
        return $this->belongsToMany(user::class,'user_niv_etuds','user_id','niv_etud_id');
    }
    /**
     * The roles that belong to the Niv_etudiant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function formation()
    {
        return $this->belongsToMany(formation::class, 'formation_niv_etuds', 'niv_etudiant_id', 'formation_id')
        ->as('formation_niv_etud')
        ->withTimestamps();
    }
}
