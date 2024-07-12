<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $faillabl = [
        'contenu',
        'user_id',
        'formation_id',
        'event_id'
    ];
    public function user(){
        return $this->belongsto(user::class,'user_id','id');
    }

    public function formation(){
        return $this->belongsto(formation::class,'formation_id','id');
    }

    public function event(){
        return $this->belongsTo(event::class,'event_id','id');
    }
}
