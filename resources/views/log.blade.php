@extends('layouts.dash')

@section('body')
    <div class="wrapper ">
        <div class="log ">

            <div class="content">
                <div class="row">
                    <div class="col-md-6 container">
                        <div class="card card-user">
                            <div class="image">
                                <img src="{{asset('/img/damir-bosnjak.jpg')}}" alt="...">  
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <img class="avatar border-gray" src="{{asset('/img/default-avatar.png')}}" alt="..."> 
                                </div>
                                <p class="description text-center">
                                    Caso não tenha uma conta
                                    <br> 
                                    voce pode criar <a href="#"><b> aqui </b></a>
                                </p>

                                <!-- Form inicio-->
                                <form action="/agendamento" method="POST">    
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label for="disponibilidade">Login</label>
                                                <input class="form-control" type="text" id="disponibilidade" name="disponibilidade">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input class="form-control" type="text" id="disponibilidade" name="disponibilidade">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary btn-round">Entrar</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form fim -->
                            
                            </div>
                            
                            <div class="card-footer">
                                <hr>
                                <div class="button-container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-6 ml-auto">
                                            <h5>12
                                                <br>
                                                <small>Usuários</small>
                                            </h5>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                            <h5>200
                                                <br>
                                                <small>Doações</small>
                                            </h5>
                                        </div>
                                        <div class="col-lg-3 mr-auto">
                                            <h5>120 
                                                <br>
                                                <small>Vidas salvas</small>
                                            </h5>
                                        </div>
                                    </div>
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

