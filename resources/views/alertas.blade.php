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
                                <h4 class="card-title"> Alertas de sangues compatíveis</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Tipo de alerta
                                            </th>
                                            <th>
                                                Tipo sanguíneo
                                            </th>
                                            <th>
                                                Quantidade
                                            </th>
                                            <th>
                                                Posto de coleta
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Todos os alertas</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Tipo de alerta
                                            </th>
                                            <th>
                                                Tipo sanguíneo
                                            </th>
                                            <th>
                                                Quantidade
                                            </th>
                                            <th>
                                                Posto de coleta
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- FORM -->

               
            
            </div><!-- Content -->

            
            <!-- footer -->
            @component('footer')
            @endcomponent
      
        </div>
    </div>
    


@endsection

