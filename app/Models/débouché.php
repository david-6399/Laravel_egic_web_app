<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class débouché extends Model
{
    use HasFactory;
    protected $table = 'débouché';
    protected $fillable = [
        'name',
        'description'
    ];
    public function formation()
    {
        return $this->belongsToMany(formation::class, 'formation_débouché', 'débouché_id', 'formation_id')->as('formation_débouché')->withTimestamps();
    }
}
