<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'article_id',
        'viewed_at',
    ];

    public $timestamps = false;

    protected $dates = ['viewed_at'];

    protected $casts = [
        'viewed_at' => 'datetime',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Article
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
