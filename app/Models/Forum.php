<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function comentars()
    {
        return $this->hasMany(Comentars::class);
    }
}
