@extends('layouts.app')

@section('body')
<h1> Editar disponibilidade para doação</h1>


<form action="/disponibilidade/{{$dispo->id}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="tipo">Tipo de doação</label>
        <select class="form-control" id="tipo" name="tipo">
           
            @if ($dispo->tipoDoacao == "Medula óssea")
                <option>Doação de sangue</option>
                <option selected>Medula óssea</option>
            @else
                <option selected>Doação de sangue</option>
                <option>Medula óssea</option>
            @endif
            
            
        </select>
    </div>
    <div class="form-group">
        <label for="disponibilidade">Dia e hora</label>
        <input class="form-control" type="datetime-local" id="disponibilidade" name="disponibilidade" value="$dispo->disponibilidade" required>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/disponibilidade' " />
</form>
@endsection