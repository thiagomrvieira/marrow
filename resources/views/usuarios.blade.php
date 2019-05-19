@extends('layouts.app')

@section('body')
    <h1> Usuários </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar agendamento para doação</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Tipo sanguíneo</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->tipo}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="/agendamento/editar/{{$user->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/agendamento/apagar/{{$user->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/usuário/novo" class="btn btn-sm btn-primary" role="button">Novo</a>
    
    </div>
    

@endsection