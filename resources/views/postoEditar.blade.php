@extends('layouts.app')

@section('body')
<h1> Editar posto de coleta</h1>


<form action="/postos/{{$posto->id}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{$posto->nome}}" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="endereco" value="{{$posto->endereco}}" required>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" name="telefone" id="telefone" value="{{$posto->telefone}}"required>
    </div>
    


    <button type="submit" class="btn btn-primary">Enviar</button>
    <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/postos' " />
</form>
@endsection