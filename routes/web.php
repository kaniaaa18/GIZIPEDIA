<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function ()  {
    return view('app.home');
})->name('home');

Route::get('/about', function ()  {
    return view('app.about');
})->name('about');

Route::get('/content', function ()  {
    return view('app.content');
})->name('content');

Route::get('/food', function ()  {
    return view('app.food');
})->name('food');

Route::get('/recipe', function ()  {
    return view('app.recipe');
})->name('recipe');