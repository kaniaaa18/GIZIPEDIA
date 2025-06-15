<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\ArticleLog;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(6);
        return view('app.content', compact('articles'));
    }

    public function show(Article $article)
    {
        if (Auth::check()) {
            ArticleLog::create([
                'user_id' => Auth::id(),
                'article_id' => $article->id,
                'viewed_at' => now(),
            ]);
        }

        return view('app.content-article', compact('article'));
    }

}
