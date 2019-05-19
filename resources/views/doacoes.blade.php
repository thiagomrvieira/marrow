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
                                <h4 class="card-title"> Suas doações </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Tipo de doação
                                            </th>
                                            <th>
                                                Posto
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
                                        {{-- @foreach ($dispo as $disp)
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
                                        
                                            
                                        @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="update ml-auto mr-auto">
                        <button type="submit" class="btn btn-secondary btn-round">Gerar relatório</button>
                    </div>
                </div>
            
            </div><!-- Content -->

            
            <!-- footer -->
            @component('footer')
            @endcomponent
      
        </div>
    </div>
    


@endsection

