@extends('Maratonando.app')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="shadow-sm rounded p-5 bg-light w-50">
        <h2 class="text-dark text-center">Cadastrar filme</h2>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Titulo do filme</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Resumo do filme</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ator/Atriz</label>
                <div class="d-flex">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <a href="#titulo" class="btn btn-dark ml-2">+</a>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Genero</label>
                <div class="d-flex">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <a href="#titulo" class="btn btn-dark ml-2">+</a>
                </div>
            </div>
            <button type="submit" class="btn btn-dark w-100">Cadastrar</button>
            <a href="{{ route('home') }}" class="btn btn-link w-100 text-center text-dark"> Inicio</a>
        </form>
    </div>
</div>
@endsection