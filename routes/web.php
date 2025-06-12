<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/recipe', function () {
    return view('app.recipe');
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
