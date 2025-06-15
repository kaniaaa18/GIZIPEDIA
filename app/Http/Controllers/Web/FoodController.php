<?php

namespace App\Http\Controllers\Web;

use App\Models\Food;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::latest()->paginate(6);
        $categories = Category::all();
        return view('app.food', compact('foods', 'categories'));
    }

    public function show($slug)
    {
        $food = Food::where('slug', $slug)->firstOrFail();
        return view('app.food-category', compact('food'));
    }

    public function showByCategory($slug)
{
    $category = Category::where('slug', $slug)->firstOrFail();

    $foods = $category->foods;

    return view('app.food-category', [
        'category' => $category,
        'foods' => $foods,
    ]);
}
}
