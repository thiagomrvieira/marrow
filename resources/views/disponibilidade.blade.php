@extends('layouts.app')

@section('body')
    <h1> Disponibilidade para doação </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar disponibilidade para doação</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Tipo de doação</th>
                        <th>Tipo sanguíneo</th>
                        <th>Disponibilidade</th>
                        <th>Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dispo as $disp)
                        <tr>
                            <td>{{$disp->id}}</td>
                            <td>{{$disp->usuario}}</td>
                            <td>{{$disp->instrucoes}}</td>
                            
                            <td>
                                <a href="/disponibilidade/editar/{{$disp->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/disponibilidade/apagar/{{$disp->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/instrucoes/novo" class="btn btn-sm btn-primary" role="button">Nova instrução</a>
    
    </div>
    

@endsection