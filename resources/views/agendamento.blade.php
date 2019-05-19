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
                                            <th>
                                                Observações
                                            </th>
                                        </thead>
                                        <tbody>
                                        @foreach ($dispo as $disp)
                                            @if ($disp->usuario == auth()->user()->name." ".auth()->user()->sobrenome)
                                                
                                                <tr>
                                                    <td>
                                                        {{$disp->usuario}}
                                                    </td>
                                                    <td>
                                                        {{$disp->tipoSangue}}
                                                    </td>
                                                    <td>
                                                        {{$disp->tipoDoacao}}
                                                    </td>
                                                    <td>
                                                        {{ date('d-m-Y', strtotime($disp->agendamento))}}
                                                    </td>
                                                    <td>
                                                        {{ date('H:i', strtotime($disp->agendamento))}}
                                                    </td>
                                                    <td>
                                                        {{$disp->observacoes}}
                                                    </td>
                                                
                                                </tr>

                                            @endif
                                        
                                            
                                        @endforeach
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
                                <form action="/agendamento" method="POST">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>Nome (disabled)</label>
                                                <input type="text" class="form-control" disabled="" placeholder="Company" value="{{auth()->user()->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                <label>Tipo sanguíneo (disabled)</label>
                                                <input type="text" class="form-control" disabled="" placeholder="tipoSangue" value="{{auth()->user()->tipoSangue}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address (disabled)</label>
                                                <input type="email" class="form-control" disabled="" placeholder="{{auth()->user()->email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Tipo de doação</label>
                                                <select class="form-control" id="tipoDoacao" name="tipoDoacao" type="text">
                                                        <option>Doação de sangue</option>
                                                        <option>Medula óssea</option>
                                                </select>
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Posto de coleta</label>
                                                <select class="form-control" id="localDoacao" name="localDoacao" type="text">
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
                                                <label for="agendamento">Dia e hora</label>
                                                <input class="form-control" type="datetime-local" id="agendamento" name="agendamento">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Observações</label>
                                                <textarea class="form-control textarea" name="observacoes" id="observacoes"></textarea>
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

