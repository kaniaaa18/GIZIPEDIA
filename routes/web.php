<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\RecipeController;

Route::get('/', function ()  {
    return view('app.home');
})->name(name: 'home');

Route::get('/home', function () {
    return view('app.home');
});


Route::get('/about', function () { 
    return view('app.about');
});


Route::get('/content', function () {
    return view('app.content');
});


Route::get('/food', function () {
    return view('app.food');
});

Route::get('/forum', function () {
    return view('app.forum');
});


Route::get('/forum', function () {
    return view('app.forum');
});

Route::get('/calculator', function () {
    return view('app.calculator');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/calculator', function () {
    return view('app.calculator');
});

Route::get('/calculator', [CalculatorController::class, 'index'])->name('kalkulator.index');
Route::post('/calculator', [CalculatorController::class, 'hitung'])->name('kalkulator.hitung');

Route::get('/recipe/ayam_panggang', [RecipeController::class, 'ayamPanggang']);
Route::get('/recipe/salad_quinoa', [RecipeController::class, 'saladQuinoa']);
Route::get('/recipe/ikan_salmon', [RecipeController::class, 'ikanSalmon']);
Route::get('/recipe/sup_sayuran', [RecipeController::class, 'supSayuran']);
Route::get('/recipe/roti_biji_bijian', [RecipeController::class, 'rotiBijiBijian']);

Route::middleware('auth')->group(function () {
    Route::get('/recipe', [RecipeController::class, 'index'])->name('recipes.index');
    Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipes.create');
    Route::post('/recipe', [RecipeController::class, 'store'])->name('recipes.store');
});