<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentars extends Model
{
    protected $table = 'comentars';
    protected $fillable = ['forum_id', 'answer', 'name', 'is_anonim'];
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

}
