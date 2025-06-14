<?php

namespace App\Http\Controllers\Web;

use App\Models\Article;
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
        return view('app.content-article', compact('article'));
    }
}
