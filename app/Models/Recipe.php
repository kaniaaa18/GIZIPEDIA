<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
    'title',
    'ingredients',
    'tools',
    'steps',
    'image',
    'user_id',
];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
