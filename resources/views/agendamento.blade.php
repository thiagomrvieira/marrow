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
                                                Tipo de doação
                                            </th>
                                            <th>
                                                Local
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
                                            <th>
                                                Ações
                                            </th>
                                        </thead>
                                        <tbody>
                                        @foreach ($agenda as $a)
                                            @if ($a->user->name == auth()->user()->name)
                                                
                                                <tr>
                                                    <td>
                                                        {{$a->tipo}}
                                                    </td>
                                                    <td>
                                                        {{$a->posto->nome}}
                                                    </td>
                                                    <td>
                                                        {{ date('d-m-Y', strtotime($a->data))}}
                                                    </td>
                                                    <td>
                                                        {{ date('H:i', strtotime($a->data))}}
                                                    </td>
                                                    <td>
                                                        {{$a->observacoes}}
                                                    </td>
                                                    <td>
                                                    <a href="">
                                                        <i class="fa fa-edit" style="font-size: 20px"></i>
                                                    </a>
                                                    <a href="">
                                                        <i class="fa fa-trash" style="font-size: 20px"></i>
                                                    </a>
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
                                                <input type="text" class="form-control" disabled="" placeholder="tipoSangue" value="{{auth()->user()->sangue->tipo}}">
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
                                                <select class="form-control" id="posto" name="posto" type="text">
                                                    {{ $postos = \App\Posto::all() }}                                               
                                                    @foreach($postos as $p)
                                                        <option value="{{$p->id}}"> {{$p->nome}} </option>   
                                                    @endforeach   
                                                   
                                                    <!-- <option>Todos</option>    
                                                    <option>Hemopac</option>
                                                    <option>Uncisal</option> -->
                                                </select>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label for="data">Dia e hora</label>
                                                <input class="form-control" type="datetime-local" id="data" name="data" required>
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

