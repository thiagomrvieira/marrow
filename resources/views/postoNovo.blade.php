@extends('layouts.app')

@section('body')
<h1> Novo posto de coleta</h1>


<form action="/postos" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="endereco" required>
    </div>
    <div class="form-group">
        <label for="funcionamento">Horário de funcionamento</label>
        <input type="text" class="form-control" name="funcionamento" id="funcionamento" required>
    </div>

    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" name="telefone" id="telefone" required>
    </div>
    


    <button type="submit" class="btn btn-primary">Enviar</button>
    <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/areas' " />
</form>
@endsection