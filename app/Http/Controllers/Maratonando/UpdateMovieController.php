<?php

namespace App\Http\Controllers\Maratonando;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Filmes;
use App\Model\Ator;
use App\Model\Genero;

class UpdateMovieController extends Controller
{
    public function index(){
        $movies = Filmes::all();
        $content = [];

        foreach($movies as $movie){
            $actors = Ator::get()->where('fk_idmovie',$movie->id);
            $genders = Genero::get()->where('fk_idmovie',$movie->id);
            array_push($content,array('title' => $movie->title, 'description' => $movie->description, 'actors' => $actors, 'genders' => $genders));
        }
        return view('Maratonando.Movies.update', compact('content'));
    }
    public function show(Request $request){
        $id_movie = $request->route('id');
        $movie = Filmes::find($id_movie);
        $actors = Ator::get()->where('fk_idmovie',$id_movie);
        $genders = Genero::get()->where('fk_idmovie',$id_movie);

        return view('Maratonando.Movies.edit', compact('movie','actors','genders'));
    }
}
