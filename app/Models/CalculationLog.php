<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CalculationLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'input',
        'result',
        'calculated_at',
    ];

    public $timestamps = false;

    protected $casts = [
        'input' => 'array',
        'result' => 'array',
        'calculated_at' => 'datetime',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
