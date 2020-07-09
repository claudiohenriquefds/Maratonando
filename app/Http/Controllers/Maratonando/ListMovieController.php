<?php

namespace App\Http\Controllers\Maratonando;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Filmes;
use App\Model\Ator;
use App\Model\Genero;

class ListMovieController extends Controller
{
    public function index(){
        $movies = Filmes::all();
        $content = [];

        foreach($movies as $movie){
            $actors = Ator::get()->where('fk_idmovie',$movie->id);
            $genders = Genero::get()->where('fk_idmovie',$movie->id);
            array_push($content,array('id' => $movie->id, 'title' => $movie->title, 'description' => $movie->description, 'actors' => $actors, 'genders' => $genders));
        }
        return view('Maratonando.Movies.list', compact('content'));
    }
}
