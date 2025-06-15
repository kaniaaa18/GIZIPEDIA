<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\FoodController;
use App\Http\Controllers\Web\ForumController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\Web\ArticleController;

Route::get('/', function () {
    return view('app.home');
});

Route::get('/about', function () { 
    return view('app.about');
});

Route::get('/content', [ArticleController::class, 'index'])->name('app.content');
Route::get('/content/{article:slug}', [ArticleController::class, 'show'])->name('app.content-article');

Route::get('/food', [FoodController::class, 'index']);
Route::get('/food/category/{slug}', [FoodController::class, 'showByCategory'])->name('food-category');

Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');
Route::post('/forum/{id}/answer', [ForumController::class, 'storeAnswer'])->name('forum.answer');

Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

Route::get('/recipe/ayam_panggang', [RecipeController::class, 'ayamPanggang'])->name('recipe.ayam_panggang');
Route::get('/recipe/salad_quinoa', [RecipeController::class, 'saladQuinoa'])->name('recipe.salad_quinoa');
Route::get('/recipe/ikan_salmon', [RecipeController::class, 'ikanSalmon'])->name('recipe.ikan_salmon');
Route::get('/recipe/sup_sayuran', [RecipeController::class, 'supSayuran'])->name('recipe.sup_sayuran');
Route::get('/recipe/roti_biji_bijian', [RecipeController::class, 'rotiBijiBijian'])->name('recipe.roti_biji_bijian');


Route::middleware(['auth'])->group(function () {
    Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipes.create');
    Route::post('/recipe', [RecipeController::class, 'store'])->name('recipe.store');
});

Route::get('/calculator', [CalculatorController::class, 'index'])->name('kalkulator.index');
Route::post('/calculator', [CalculatorController::class, 'hitung'])->name('kalkulator.hitung');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::post('/calculation', [CalculatorController::class, 'hitung'])->middleware('auth');
// Route::post('/article', [ArticleController::class, 'article'])->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
