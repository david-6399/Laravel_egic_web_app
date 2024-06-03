<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class support_cours extends Model
{
    use HasFactory;
    protected $fillale = ([
        'name',
        'contenu',
        'date',
        'nome_prof',
        'cod_module'
    ]);
    
    public function module(){
        return $this->BelongsTo(module::class,'cod_module','id');
    }
}
