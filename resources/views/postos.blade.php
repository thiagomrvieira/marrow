@extends('layouts.app')

@section('body')
    <h1> Postos de Coleta</h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar postos de coleta</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postos as $posto)
                        <tr>
                            <td>{{$posto->id}}</td>
                            <td>{{$posto->nome}}</td>
                            <td>{{$posto->endereco}}</td>
                            <td>{{$posto->telefone}}</td>
                            
                            <td>
                                <a href="/postos/editar/{{$posto->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/postos/apagar/{{$posto->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/postos/novo" class="btn btn-sm btn-primary" role="button">Novo posto</a>
    
    </div>
    

@endsection