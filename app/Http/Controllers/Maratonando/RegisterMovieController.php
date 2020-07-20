<?php

namespace App\Http\Controllers\Maratonando;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Filmes;
use App\Model\Genero;
use App\Model\Ator;
use RealRashid\SweetAlert\Facades\Alert;
 

class RegisterMovieController extends Controller
{
    public function index(){
        return view('Maratonando.Movies.register');
    }
    public function store(Request $request){
        $data = $request->all();

        $cont = 0;
        $actor = '';
        $gender = '';

        $movies = Filmes::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        for($cont = 0; $cont <= $data['actorQtd'];$cont++){
            $actor = Ator::create([
                'fk_idmovie' => $movies->id,
                'actor' => $data['actor_'.$cont],
            ]);
        }
        for($cont = 0; $cont <= $data['genderQtd']; $cont++){
            $gender = Genero::create([
                'fk_idmovie' => $movies->id,
                'gender' => $data['gender_'.$cont],
            ]);
        }

        if($movies && $actor && $gender){
            Alert::success('Sucesso', 'O filme foi cadastrado com sucesso.');
            return redirect()->route('home');
        }else{
            Alert::error('Erro', 'Ocorreu um problema ao cadastar, tente novamente.');
            return redirect()->route('register_movie');
        }
    }
}
