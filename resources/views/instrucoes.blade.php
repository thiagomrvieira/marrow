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
                                <p class="card-category"> Antes de efetuar uma doação verifique as instruções</p>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="update ml-auto mr-auto">
                                        <a href="#" class="btn btn-primary btn-round">Doação de sangue</a>
                                    </div>

                                    <div class="update ml-auto mr-auto">
                                        <a href="#" class="btn btn-primary btn-round">Doação de Medula óssea</a>
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

