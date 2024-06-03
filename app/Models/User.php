<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'cod_nv_etudiant',
        'password',
        'address',
        'usertype',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function formation()
    {
        return $this->belongsToMany(formation::class, 'user_formation', 'user_id', 'formation_id')
        ->as('user_formation')
        ->withTimestamps();
    }

    
    
    public function niv_etudiant(){
        return $this->belongsToMany(niv_etudiant::class,'user_niv_etuds','user_id','niv_etud_id')
        ->as('user_niv_etud')
        ->withTimestamps();
    }

    public function comment(){
        return $this->hasmany(comment::class,'user_id','id');
    }

    public function event(){
        return $this->belongsToMany(event::class,'user_event','user_id','event_id')
        ->as('user_event')
        ->withTimestamps();
    }
}
