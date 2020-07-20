@extends('Maratonando.app')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="shadow-sm rounded p-5 text-center bg-light">
        <h2 class="text-dark">Bem-vindo ao Maratonando</h2>
        <div class="d-block">
            <a class="btn btn-outline-dark rounded-pill w-100 m-1" href="{{ route('register_movie') }}">Cadastrar filme</a>
            <a class="btn btn-outline-dark rounded-pill w-100 m-1" href="{{ route('list_movies') }}">Listar filmes</a>
            <a class="btn btn-outline-dark rounded-pill w-100 m-1" href="{{ route('update_movie') }}">Editar filme</a>
            <a class="btn btn-outline-dark rounded-pill w-100 m-1" href="{{ route('delete_movie') }}">Apagar filme</a>
            <a class="btn btn-outline-dark rounded-pill w-100 m-1" href="{{ route('import_xml') }}">Importar XML</a>
        </div>
    </div>
</div>
@endsection