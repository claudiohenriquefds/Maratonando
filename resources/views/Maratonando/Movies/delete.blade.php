@extends('Maratonando.app')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="shadow-sm rounded p-5 bg-light w-75">
        <h2 class="text-dark text-center">Editar filme</h2>
        <p class="text-dark text-center w-100">Escolha o flme que deseja Apagar</p>
        <table class="table table-striped">
        <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Resumo</th>
                    <th scope="col">Elenco</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($content as $c)
                <tr>
                    <td>{{ $c['title'] }}</td>
                    <td>{{ $c['description']}}</td>
                    <td>
                    @foreach ($c['actors'] as $actor)
                        <p class="text-nowrap">{{ $actor->actor }}</p>
                    @endforeach
                    </td>
                    <td>
                    @foreach ($c['genders'] as $gend)
                        <p>{{ $gend->gender }}</p>
                    @endforeach
                    </td>
                    <td class="d-flex">
                        <a href="#" class="btn btn-outline-danger ml-1">Apagar</a>
                    </td>
                </tr>
                @empty
                <p>Sem dados cadastrais</p>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('home') }}" class="btn btn-link w-100 text-center text-dark"> Inicio</a>
    </div>
</div>
@endsection