<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_formation extends Model
{
    use HasFactory;
    protected  $fillable = [
        'name',
        'description',
        'image_path'
    ];
    public function formation(){
        return $this->hasMany(formation::class,'cod_typeformation','id');
    }
}
