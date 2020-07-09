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
                @if (sizeof($actors) > 1)
                    <input type="text" class="form-control" id="actor_0" name="actor_0" value="{{ $actors[0]->actor }}" required>
                @else
                    <input type="text" class="form-control" id="actor_0" name="actor_0" value="{{ $actors[2]->actor }}" required>
                @endif
                    <a href="#titulo" onclick="add_actor()" class="btn btn-dark ml-2">+</a>
                </div>
                <div id="actorAdd">
                    <?php 
                        for($cont = 1; $cont < sizeof($actors); $cont++){
                            echo '<div class="d-flex mt-1" id="child_actor">',
                                '<input type="text" class="form-control" id="actor_'.$cont.'" name="actor_'.$cont.'" value="'.$actors[$cont]->actor.'" required>',
                                '<a href="#titulo" onclick="remove_actor()" class="btn btn-dark ml-2">-</a>',
                                '</div>';
                        }
                    ?>
                    <input type="hidden" name="actorQtd" id="actorQtd" value="{{ $cont - 1 }}">
                </div>
            </div>
            <div class="form-group">
                <label for="gender_0">Genero</label>
                <div class="d-flex">
                @if (sizeof($genders) > 1)
                    <input type="text" class="form-control" id="gender_0" name="gender_0" value="{{$genders[0]->gender}}" required>
                @else
                    <input type="text" class="form-control" id="gender_0" name="gender_0" value="{{$genders[2]->gender}}" required>
                @endif
                    <a href="#titulo" onclick="add_gender()" class="btn btn-dark ml-2">+</a>
                </div>
            </div>
            <div id="genderAdd">
                <?php 
                    for($cont = 1; $cont < sizeof($genders); $cont++){
                        echo '<div class="d-flex mt-1 mb-1" id="child_gender">',
                            '<input type="text" class="form-control" id="gender_'.$cont.'" name="gender_'.$cont.'" value="'.$genders[$cont]->gender.'" required>',
                            '<a href="#titulo" onclick="remove_gender()" class="btn btn-dark ml-2">-</a>',
                            '</div>';
                    }
                    ?>
            </div>
            <input type="hidden"  name="genderQtd" id="genderQtd" value="{{ $cont - 1 }}">
            <button type="submit" class="btn btn-dark w-100">Atualizar</button>
            <button type="submit" class="btn btn-danger w-100 mt-1">Cancelar</button>
            <a href="{{ route('home') }}" class="btn btn-link w-100 text-center text-dark"> Inicio</a>
        </form>
    </div>
</div>
@endsection