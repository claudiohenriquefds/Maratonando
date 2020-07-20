@extends('Maratonando.app')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="shadow-sm rounded p-5 bg-light w-50">
        <h2 class="text-dark text-center">Editar filme</h2>
        <form method="post" action="/update/{{$movie->id}}">
        @csrf
            <div class="form-group">
                <label for="title">Titulo do filme</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Resumo do filme</label>
                <textarea class="form-control" id="description" rows="3" name="description" required>{{ $movie->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="actor_0">Ator/Atriz</label>
                <div class="d-flex">
                    <input type="text" class="form-control" id="actor_0" name="actor_0" value="{{ $nameActors[0] }}" required>
                    <a href="#titulo" onclick="add_actor()" class="btn btn-dark ml-2">+</a>
                </div>
                <div id="actorAdd">
                    <?php 
                        for($cont = 1; $cont < sizeof($nameActors); $cont++){
                            echo '<div class="d-flex mt-1" id="child_actor">',
                                '<input type="text" class="form-control" id="actor_'.$cont.'" name="actor_'.$cont.'" value="'.$nameActors[$cont].'" required>',
                                '<a href="#titulo" onclick="remove_actor()" class="btn btn-dark ml-2">-</a>',
                                '</div>';
                        }
                    ?>
                    <input type="hidden" id="actorValue" value="{{ $cont - 1 }}">
                    <input type="hidden" name="actorQtd" id="actorQtd" value="{{ $cont }}">
                </div>
            </div>
            <div class="form-group">
                <label for="gender_0">Genero</label>
                <div class="d-flex">
                    <input type="text" class="form-control" id="gender_0" name="gender_0" value="{{$genderMovies[0]}}" required>
                    <a href="#titulo" onclick="add_gender()" class="btn btn-dark ml-2">+</a>
                </div>
            </div>
            <div id="genderAdd">
                <?php 
                    for($cont = 1; $cont < sizeof($genderMovies); $cont++){
                        echo '<div class="d-flex mt-1 mb-1" id="child_gender">',
                            '<input type="text" class="form-control" id="gender_'.$cont.'" name="gender_'.$cont.'" value="'.$genderMovies[$cont].'" required>',
                            '<a href="#titulo" onclick="remove_gender()" class="btn btn-dark ml-2">-</a>',
                            '</div>';
                        
                    }
                    ?>
            <input type="hidden" id="genderValue" value="{{ $cont - 1 }}">
            <input type="hidden"  name="genderQtd" id="genderQtd" value="{{ $cont }}">
            </div>
            <button type="submit" class="btn btn-dark w-100">Atualizar</button>
            <a href="{{ route('home') }}" class="btn btn-danger w-100 mt-1">Cancelar</a>
            <a href="{{ route('home') }}" class="btn btn-link w-100 text-center text-dark"> Inicio</a>
        </form>
    </div>
</div>
@endsection