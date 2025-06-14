<?php

namespace App\Http\Controllers\Web;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::latest()->paginate(6);
        return view('app.recipe', compact('recipes'));
    }

    public function show($slug)
    {
        $recipe = Recipe::where('slug', $slug)->firstOrFail();
        return view('app.recipe-detail', compact('Recipe'));
    }
}
