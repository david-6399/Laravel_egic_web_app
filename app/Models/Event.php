<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';

    protected $primary = 'id'; 

    protected $fillable = ['id','titre','description','event_start','event_end','abonnement','imag_path'];

    public function user(){
        return $this->belongsToMany(user::class,'user_event','user_id','event_id')
        ->as('user_event')
        ->withTimestamps();
    }
}
