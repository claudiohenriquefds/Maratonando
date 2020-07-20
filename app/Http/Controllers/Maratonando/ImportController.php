<?php

namespace App\Http\Controllers\Maratonando;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Filmes;
use App\Model\Genero;
use App\Model\Ator;
use RealRashid\SweetAlert\Facades\Alert;

class ImportController extends Controller
{
    public function index(){
        return view('Maratonando.Movies.import');
    }
    public function store(Request $request){
        $value = $request->file('xml');
        $data = simplexml_load_file($value);

        foreach($data->filme as $filme){
            if($filme['id'] && Filmes::find($filme['id'])){
                $movie = Filmes::find($filme['id'])->update([
                    'title' => $filme->titulo,
                    'description' => $filme->resumo,
                ]);
                $genders = Genero::where('fk_idmovie', $filme['id'])->get();

                foreach($genders as $key => $gender){
                    $g = Genero::where('id',$gender->id)->update([
                        'gender' => $filme->genero[$key],
                    ]);
                }
                $actors = Ator::where('fk_idmovie', $filme['id'])->get();
                foreach ($actors as $key => $actor) {
                    $a = Ator::where('id',$actor->id)->update([
                        'actor' => $filme->elenco->ator[$key],
                    ]);
                }
            }else{
                $movie = Filmes::create([
                    'title' => $filme->titulo,
                    'description' => $filme->resumo,
                ]);
                foreach($filme->genero as $gender){
                    $g = Genero::create([
                        'fk_idmovie' => $movie->id,
                        'gender' => $gender,
                    ]);
                }
                foreach($filme->elenco->ator as $actor){
                    $a = Ator::create([
                        'fk_idmovie' => $movie->id,
                        'actor' => $actor,
                    ]);
                }
            }

        }
        if($movie && $g && $a){
            Alert::success('Sucesso', 'O filme foi Cadastrado/Atualizado com sucesso.');
            return redirect()->route('home');
        }else{
            Alert::error('Erro', 'Ocorreu um problema ao Cadastrar/Atualizar o filme, tente novamente.');
            return redirect()->route('import');
        }


    }
}
