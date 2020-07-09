<?php

namespace App\Http\Controllers\Maratonando;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Filmes;
use App\Model\Ator;
use App\Model\Genero;

class DeleteMovieController extends Controller
{
    public function index(){
        $movies = Filmes::all();
        $content = [];

        foreach($movies as $movie){
            $actors = Ator::get()->where('fk_idmovie',$movie->id);
            $genders = Genero::get()->where('fk_idmovie',$movie->id);
            array_push($content,array('id' => $movie->id, 'title' => $movie->title, 'description' => $movie->description, 'actors' => $actors, 'genders' => $genders));
        }
        return view('Maratonando.Movies.delete', compact('content'));
    }
    public function delete(Request $request){
        $id_movie = $request->route('id');
        $actors = Ator::where('fk_idmovie',$id_movie)->delete();
        $genders = Genero::where('fk_idmovie',$id_movie)->delete();
        $movie = Filmes::find($id_movie)->delete();

        if($actors && $genders && $movie){
            return redirect()->route('home');
        }else{
            return redirect()->route('delete_movie');
        }
    }
}
