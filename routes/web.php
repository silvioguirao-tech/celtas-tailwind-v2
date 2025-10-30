<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');