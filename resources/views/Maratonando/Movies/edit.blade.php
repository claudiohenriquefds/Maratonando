@extends('Maratonando.app')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="shadow-sm rounded p-5 bg-light w-50">
        <h2 class="text-dark text-center">Editar filme</h2>
        <form>
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
                    <input type="text" class="form-control" id="actor_0" name="actor_0" value="{{ $actors[0]->actor }}" required>
                    <a href="#titulo" onclick="add_actor()" class="btn btn-dark ml-2">+</a>
                    <input type="hidden" name="actorQtd" id="actorQtd">
                    
                </div>
            </div>
            <div id="actorAdd"></div>
            <div class="form-group">
                <label for="gender_0">Genero</label>
                <div class="d-flex">
                    <input type="text" class="form-control" id="gender_0" name="gender_0" value="{{$genders[0]->gender}}" required>
                    <a href="#titulo" onclick="add_gender()" class="btn btn-dark ml-2">+</a>
                    <input type="hidden"  name="genderQtd" id="genderQtd">
                </div>
            </div>
            <div id="genderAdd"></div>
            <button type="submit" class="btn btn-dark w-100">Atualizar</button>
            <button type="submit" class="btn btn-danger w-100 mt-1">Cancelar</button>
            <a href="{{ route('home') }}" class="btn btn-link w-100 text-center text-dark"> Inicio</a>
        </form>
    </div>
</div>
@endsection