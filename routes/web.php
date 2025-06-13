<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/recipe', function () {
    return view('app.recipe');
});

Route::get('/calculator', function () {
    return view('app.calculator');
});