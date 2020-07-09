@extends('Maratonando.app')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="shadow-sm rounded p-5 bg-light w-50">
        <h2 class="text-dark text-center">Cadastrar filme</h2>
        <form method="post" action="{{ route('store_movie') }}">
        @csrf
            <div class="form-group">
                <label for="title">Titulo do filme</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Resumo do filme</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="actor" id="actorLabel">Ator/Atriz</label>
                <div class="d-flex">
                    <input type="text" class="form-control" id="actor_0" name="actor_0">
                    <a href="#titulo" onclick="add_actor()" class="btn btn-dark ml-2">+</a>
                    <input type="hidden" name="actorQtd" id="actorQtd">
                </div>
            </div>
            <div id="actorAdd"></div>
            <div class="form-group">
                <label for="gender" id="genderLabel">Genero</label>
                <div class="d-flex">
                    <input type="text" class="form-control" id="gender_0" name="gender_0">
                    <a href="#titulo" onclick="add_gender()" class="btn btn-dark ml-2">+</a>
                    <input type="hidden"  name="genderQtd" id="genderQtd">
                </div>
            </div>
            <div id="genderAdd"></div>
            <button type="submit" class="btn btn-dark w-100">Cadastrar</button>
            <a href="{{ route('home') }}" class="btn btn-link w-100 text-center text-dark"> Inicio</a>
        </form>
    </div>
</div>
@endsection