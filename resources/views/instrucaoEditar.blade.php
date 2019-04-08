@extends('layouts.app')

@section('body')
<h1> Editar posto de coleta</h1>


<form action="/instrucoes/{{$instrucao->id}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="{{$instrucao->titulo}}" required>
    </div>
    <div class="form-group">
        <label for="instrucoes">Instruções</label>
        <textarea class="form-control" name="instrucoes" id="instrucoes" rows="5" required>{{$instrucao->instrucoes}}</textarea >
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/instrucoes' " />
</form>
@endsection