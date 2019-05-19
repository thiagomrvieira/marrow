@extends('layouts.app')

@section('body')
<h1> Cadastrar agendamento para doação</h1>


<form action="/agendamento" method="POST">
    @csrf
    <div class="form-group">
        <label for="tipo">Tipo de doação</label>
        <select class="form-control" id="tipo" name="tipo">
            <option>Doação de sangue</option>
            <option>Medula óssea</option>
        </select>
    </div>
    <div class="form-group">
        <label for="agendamento">Dia e hora</label>
        <input class="form-control" type="datetime-local" id="agendamento" name="agendamento">
        
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
    <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/agendamento' " />
</form>
@endsection