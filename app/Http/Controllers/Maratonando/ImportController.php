<?php

namespace App\Http\Controllers\Maratonando;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Filmes;
use App\Model\Genero;
use App\Model\Ator;

class ImportController extends Controller
{
    public function index(){
        return view('Maratonando.Movies.import');
    }
    public function store(Request $request){
        $value = $request->file('xml');
        $data = simplexml_load_file($value);

        //dd($data->filme[1]->genero);
        //echo $data->filme[0]->titulo;

        foreach($data->filme as $filme){
            if(!$filme['id']){
                $movie = Filmes::find($filmes['id'])->update([
                    'title' => $filme->titulo,
                    'description' => $filme->resumo,
                ]);
                foreach($filme->genero)
                $gender = Genero::where('fk_idmovie', $movie->id)->update([
                    'fk_idmovie' => $movie->id,
                    'gender' => 
                ]);
            }else{
                $movie = Filme::create([
                    'title' => $filme->titulo,
                    'description' => $filme->resumo,
                ]);
                foreach($filme->genero as $gender){
                    $genero = Genero::create([
                        'fk_idmovie' = $movie->id,
                        'gender' => $gender,
                    ]);
                }
                foreach($filme->ator as $actor){
                    $actors = Genero::create([
                        'fk_idmovie' = $movie->id,
                        'actor' => $actor,
                    ]);
                }
            }

        }


    }
}
