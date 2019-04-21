@extends('layouts.app')

@section('body')
<h1> Cadastrar disponibilidade para doação</h1>


<form action="/disponibilidade" method="POST">
    @csrf
    <div class="form-group">
        <label for="tipo">Tipo de doação</label>
        <select class="form-control" id="tipo" name="tipo">
            <option>Doação de sangue</option>
            <option>Medula óssea</option>
        </select>
    </div>
    <div class="form-group">
        <label for="disponibilidade">Dia e hora</label>
        <input class="form-control" type="datetime-local" id="disponibilidade" name="disponibilidade">
        
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
    <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/disponibilidade' " />
</form>
@endsection