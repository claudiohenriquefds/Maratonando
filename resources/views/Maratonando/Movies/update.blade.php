@extends('Maratonando.app')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="shadow-sm rounded p-5 bg-light w-50">
        <h2 class="text-dark text-center">Editar filme</h2>
        <p class="text-dark text-center w-100">Escolha o flme que deseja alterar</p>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <a href="#" class="btn btn-outline-dark">Editar</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>
                        <a href="#" class="btn btn-outline-dark">Editar</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>
                        <a href="#" class="btn btn-outline-dark">Editar</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('home') }}" class="btn btn-link w-100 text-center text-dark"> Inicio</a>
    </div>
</div>
@endsection