<?php

namespace App\Http\Controllers\Web;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::latest()->paginate(6);
        return view('app.food', compact('foods'));
    }

    public function show($slug)
    {
        $food = Food::where('slug', $slug)->firstOrFail();
        return view('app.food-category', compact('Food'));
    }
}
