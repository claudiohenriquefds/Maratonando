<?php

namespace App\Http\Controllers\Maratonando;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Filmes;
use App\Model\Ator;
use App\Model\Genero;
use RealRashid\SweetAlert\Facades\Alert;


class UpdateMovieController extends Controller
{
    public function index(){
        $movies = Filmes::all();
        $content = [];

        foreach($movies as $movie){
            $actors = Ator::get()->where('fk_idmovie',$movie->id);
            $genders = Genero::get()->where('fk_idmovie',$movie->id);
            array_push($content,array('id' => $movie->id, 'title' => $movie->title, 'description' => $movie->description, 'actors' => $actors, 'genders' => $genders));
        }
        return view('Maratonando.Movies.update', compact('content'));
    }
    public function show(Request $request){
        $id_movie = $request->route('id');
        $movie = Filmes::find($id_movie);
        $actors = Ator::get()->where('fk_idmovie',$id_movie);
        $genders = Genero::get()->where('fk_idmovie',$id_movie);
        $nameActors = [];
        $genderMovies = [];

        foreach($actors as $actor){
            array_push($nameActors,$actor->actor);
        }
        foreach ($genders as $gender) {
            array_push($genderMovies,$gender->gender);
        }

        return view('Maratonando.Movies.edit', compact('movie','nameActors','genderMovies'));
    }
    public function store(Request $request){
        $id_movie = $request->route('id');
        $data = $request->all();
        $movie = Filmes::find($id_movie)->update(array('title' => $data['title'], 'description' => $data['description']));;
        $actors = Ator::get()->where('fk_idmovie',$id_movie);       
        $genders = Genero::get()->where('fk_idmovie',$id_movie);

        for($cont = 0; $cont < $data['actorQtd']; $cont++){
            if(sizeof($actors) > 1){
                if(isset($actors[$cont])){
                    $a = Ator::where('id',$actors[$cont]->id)->update(['actor' => $data['actor_'.$cont]]);
                }else{
                    $a = Ator::create([
                        'fk_idmovie' => $id_movie,
                        'actor' => $data['actor_'.$cont],
                    ]);
                }
            }else{
                $a = Ator::where('id',$actors[2]->id)->update(['actor' => $data['actor_'.$cont]]);
            }
        }
        for($cont = 0; $cont < $data['genderQtd']; $cont++){
            if(sizeof($genders) > 1){
                if(isset($genders[$cont])){
                    $g = Genero::where('id',$genders[$cont]->id)->update(['gender' => $data['gender_'.$cont]]);
                }else{
                    $g = Genero::create([
                        'fk_idmovie' => $id_movie,
                        'gender' => $data['gender_'.$cont],
                    ]);
                }
            }else{
                $g = Genero::where('id',$genders[2]->id)->update(['gender' => $data['gender_'.$cont]]);
            }
        }

        if($movie && $a && $g){
            Alert::success('Sucesso', 'O filme foi atualizado com sucesso.');
            return redirect()->route('list_movies');
        }else{
            Alert::error('Erro', 'Ocorreu um problema ao alterar o filme, tente novamente.');
            return redirect()->route('update_movie');
        }

    }
}
