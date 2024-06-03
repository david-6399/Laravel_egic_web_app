<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsto(user::class,'user_id','id');
    }

    public function formation(){
        return $this->belongsto(formation::class,'formation_id','id');
    }
}
