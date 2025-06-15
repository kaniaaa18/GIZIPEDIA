<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
        'name',
        'is_anonim',
        'question',
    ];
    
    public function comentars()
    {
        return $this->hasMany(Comentars::class);
    }
}
