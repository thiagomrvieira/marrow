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
                                <h4 class="card-title"> Seus agendamentos</h4>
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
                                                    01/02/2019
                                                </td>
                                                <td>
                                                    11:30
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
                                                    20/04/2019
                                                </td>
                                                <td>
                                                    14:00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- FORM -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Fazer agendamento</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>Nome (disabled)</label>
                                                <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                <label>Tipo sanguíneo (disabled)</label>
                                                <input type="text" class="form-control" disabled="" placeholder="tipoSangue" value="O+">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address (disabled)</label>
                                                <input type="email" class="form-control" disabled="" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Tipo de doação</label>
                                            <select class="form-control" id="tipo" name="tipo" type="text">
                                                    <option>Doação de sangue</option>
                                                    <option>Medula óssea</option>
                                            </select>
                                        
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label>Posto de coleta</label>
                                            <select class="form-control" id="tipo" name="tipo" type="text">
                                                <option>Todos</option>    
                                                <option>Hemopac</option>
                                                <option>Uncisal</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label for="disponibilidade">Dia e hora</label>
                                            <input class="form-control" type="datetime-local" id="disponibilidade" name="disponibilidade">
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control" placeholder="Country" value="Australia">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="number" class="form-control" placeholder="ZIP Code">
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Observações</label>
                                                <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary btn-round">Agendar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    
            
            </div><!-- Content -->

            
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