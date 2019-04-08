@extends('layouts.app')

@section('body')
    <h1> Instruções para doação </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar instruções para doação</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Instuções</th>
                        <th>Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($instrucoes as $instrucao)
                        <tr>
                            <td>{{$instrucao->id}}</td>
                            <td>{{$instrucao->titulo}}</td>
                            <td>{!!$instrucao->instrucoes!!}</td>
                            
                            <td>
                                <a href="/instrucoes/editar/{{$instrucao->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/instrucoes/apagar/{{$instrucao->id}}" class="btn btn-sm btn-danger">Apagar</a>
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