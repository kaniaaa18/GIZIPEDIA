<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentars extends Model
{
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

}
