@extends('layouts.dash')

@section('body')
    <div class="wrapper ">
        
        <!-- Sidebar -->
        @component('sidebar')
        @endcomponent
      
      
        <div class="main-panel">
            <!-- Navbar -->
            @component('navbar')
            @endcomponent
            
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Simple Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Tipo sanguíneo
                                            </th>
                                            <th>
                                                Tipo de doação
                                            </th>
                                            <th>
                                                Data
                                            </th>
                                            <th>
                                                Hora
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Dakota Rice
                                                </td>
                                                <td>
                                                    Niger
                                                </td>
                                                <td>
                                                    Oud-Turnhout
                                                </td>
                                                <td>
                                                    $36,738
                                                </td>
                                                <td>
                                                    $36,738
                                                </td>
                                            </tr>
                                        
                                            <tr>
                                                <td>
                                                    Jon Porter
                                                </td>
                                                <td>
                                                    Portugal
                                                </td>
                                                <td>
                                                    Gloucester
                                                </td>
                                                <td>
                                                    $98,615
                                                </td>
                                                <td>
                                                    $98,615
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- footer -->
            @component('footer')
            @endcomponent
      
        </div>
    </div>
    


@endsection




{{-- @extends('layouts.app')

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
                        <th>Tipo sanguíneo</th>
                        <th>Tipo de doação</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dispo as $disp)
                        <tr>
                            <td>{{$disp->id}}</td>
                            <td>{{$disp->usuario}}</td>
                            <td>{{$disp->tipoSangue}}</td>
                            <td>{{$disp->tipoDoacao}}</td>
                            <td>{{ date('d-m-Y', strtotime($disp->disponibilidade))}}</td>
                            <td>{{ date('H:i', strtotime($disp->disponibilidade))}}</td>
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
        <a href="/disponibilidade/novo" class="btn btn-sm btn-primary" role="button">Novo</a>
    
    </div>
    

@endsection --}}