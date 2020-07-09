<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('Maratonando.home');
})->name('home');

Route::get('/register-movie', 'Maratonando\RegisterMovieController@index')->name('register_movie');
Route::post('/register-movie', 'Maratonando\RegisterMovieController@store')->name('store_movie');

Route::get('/list-movies', 'Maratonando\ListMovieController@index')->name('list_movies');

Route::get('/update-movie', 'Maratonando\UpdateMovieController@index')->name('update_movie');
Route::get('/update-movie/{id}', 'Maratonando\UpdateMovieController@show')->name('update');
Route::post('/update/{id}', 'Maratonando\UpdateMovieController@store');

Route::get('/delete-movie', 'Maratonando\DeleteMovieController@index')->name('delete_movie');
Route::get('/delete-movie/{id}', 'Maratonando\DeleteMovieController@delete')->name('delete');

