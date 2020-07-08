<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Maratonando.home');
})->name('home');

Route::get('/register-movie', function () {
    return view('Maratonando.Movies.register');
})->name('register_movie');

Route::get('/list-movies', function () {
    return view('Maratonando.Movies.list');
})->name('list_movies');

Route::get('/update-movie', function () {
    return view('Maratonando.Movies.update');
})->name('update_movie');

Route::get('/delete-movie', function () {
    return view('Maratonando.Movies.delete');
})->name('delete_movie');
