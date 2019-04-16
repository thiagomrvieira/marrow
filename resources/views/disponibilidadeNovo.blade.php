@extends('layouts.app')

@section('body')
<h1> Nova instrução para doação</h1>


<form action="/instrucoes" method="POST">
    @csrf
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" id="titulo" required>
    </div>
    <div class="form-group">
        <label for="instrucao">Instrução</label>
        <textarea class="form-control" name="instrucao" id="instrucao" rows="5" required></textarea >
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
    <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/instrucoes' " />
</form>
@endsection