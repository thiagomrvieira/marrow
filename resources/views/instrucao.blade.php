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
                            <h4 class="card-title"> Instruções para {{$instrucoes->titulo}}</h4>
                                <p class="card-category" style="text-transform: none;"> 
                                    Antes de efetuar uma doação verifique as instruções para que o 
                                    procedimento ocorra como recomendado
                                </p>

                            </div>
                            <div class="card-body">
                                    
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th class=" text-primary">
                                                TÍTULO
                                            </th>
                                            <td>
                                                {{$instrucoes->titulo}}
                                            </td>    
                                        </tr>
                                       
                                        <tr>
                                            <th class=" text-primary">
                                                INSTRUÇÕES
                                            </th>
                                            <td>
                                                {{$instrucoes->instrucoes}}
                                            </td>
                                        </tr>    
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="ml-auto mr-auto">
                                        <a href="#" class="btn btn-primary btn-round">Imprimir</a>
                                    </div>
                                </div>
                            
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

