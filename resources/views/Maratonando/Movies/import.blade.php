@extends('Maratonando.app')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="shadow-sm rounded p-5 bg-light w-75">
        <h2 class="text-dark text-center">Importar XML</h2>
        <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="xml" name="xml" required>
                <label class="custom-file-label" for="xml">Escolha o arquivo</label>
            </div>
            <button type="submit" class="btn btn-dark w-100">Atualizar</button>
        </form>
        <a href="{{ route('home') }}" class="btn btn-link w-100 text-center text-dark"> Inicio</a>
    </div>
</div>
@endsection