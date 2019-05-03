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
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="card-title"> Postos de coleta</h4>
                                <p class="card-category"> Postos de coleta da sua região</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Endereço
                                            </th>
                                            <th>
                                                Horário de funcionamento
                                            </th>
                                            <th>
                                                Telefone
                                            </th>
                                            
                                        </thead>
                                        <tbody>
                                            @foreach ($postos as $posto)
                                                <tr>
                                                    <td>{{$posto->nome}}</td>
                                                    <td>{{$posto->endereco}}</td>
                                                    <td>{{$posto->funcionamento}}</td>
                                                    <td>{{$posto->telefone}}</td>
                                                </tr>
                                            @endforeach
                                  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round" onclick="novoPosto()">Novo</button>
                        </div>
                    </div>
            
                <!-- FORM -->

                 <div class="row modal" tabindex="" id="dlgPostos">
                    <div class="modal-dialog col-md-12">
                        <div class="modal-content card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Novo posto</h5>
                            </div>
                            <div class="card-body">
                                <form id="form-postos">
                                
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label for="nomePosto">Nome</label>
                                                <input type="text" class="form-control" placeholder="Nome" id="nomePosto">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-7 pl-1">
                                            <div class="form-group">
                                                <label for="enderecoPosto">Endereço</label>
                                                <input type="text" class="form-control" id="enderecoPosto">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-7 pr-1">
                                            <div class="form-group">
                                                <label for="funcionamentoPosto">Horário de funcionamento</label>
                                                <input class="form-control" type="datetime-local" id="funcionamentoPosto" name="funcionamento">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="telefonePosto">Telefone</label>
                                                <input class="form-control" type="tel" id="telefonePosto" name="telefonePosto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary btn-round">Salvar</button>
                                            <button type="cancel" class="btn btn-secondary btn-round" data-dissmiss="modal">Cancelar</button>
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

@section('javascript')
    <script type="text/javascript">
       function novoPosto(){
           $('#dlgPostos').modal('show')
       } 
        
    
    </script>    



@endsection




{{-- @extends('layouts.app')

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
    

@endsection --}}