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
                                <h4 class="card-title"> Instruções para doação </h4>
                                <p class="card-category" style="text-transform: none;"> 
                                    Antes de efetuar uma doação verifique as instruções para que o 
                                    procedimento ocorra como recomendado
                                </p>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($instrucoes as $inst)
                                        <div class="ml-auto mr-auto">
                                            <a href="/instrucoes/{{$inst->id}}" class="btn btn-primary btn-round">{{$inst->titulo}}</a>
                                        </div>
                                    @endforeach

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

