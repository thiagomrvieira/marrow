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
                  <div class="col-md-4">
                    <div class="card card-user">
                      <div class="image">
                        <img src="{{asset('../img/damir-bosnjak.jpg')}}" alt="...">
                        
                      </div>
                      <div class="card-body">
                        <div class="author">
                          <a href="#">
                            <img class="avatar border-gray" src="{{asset('../img/mike.jpg')}}" alt="...">

                            <h5 class="title">{{auth()->user()->name}}</h5>
                          </a>
                          <p class="description">
                            @ {{strtolower(auth()->user()->name)}}
                          </p>
                        </div>
                        <p class="description text-center">
                          "{{auth()->user()->sobre}}"
                        </p>
                      </div>
                      <div class="card-footer">
                        <hr>
                        <div class="button-container">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-6 ml-auto">
                              <h5>12
                                <br>
                                <small>Doações</small>
                              </h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                              <h5>{{ auth()->user()->agendamento->count()}}
                                <br>
                                <small>Agendamentos</small>
                              </h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Team Members</h4>
                      </div>
                      <div class="card-body">
                        <ul class="list-unstyled team-members">
                          <li>
                            <div class="row">
                              <div class="col-md-2 col-2">
                                <div class="avatar">
                                  <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                              </div>
                              <div class="col-md-7 col-7">
                                DJ Khaled
                                <br />
                                <span class="text-muted">
                                  <small>Offline</small>
                                </span>
                              </div>
                              <div class="col-md-3 col-3 text-right">
                                <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="row">
                              <div class="col-md-2 col-2">
                                <div class="avatar">
                                  <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                              </div>
                              <div class="col-md-7 col-7">
                                Creative Tim
                                <br />
                                <span class="text-success">
                                  <small>Available</small>
                                </span>
                              </div>
                              <div class="col-md-3 col-3 text-right">
                                <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="row">
                              <div class="col-md-2 col-2">
                                <div class="avatar">
                                  <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                              </div>
                              <div class="col-ms-7 col-7">
                                Flume
                                <br />
                                <span class="text-danger">
                                  <small>Busy</small>
                                </span>
                              </div>
                              <div class="col-md-3 col-3 text-right">
                                <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div> -->
                  </div>
                  <div class="col-md-8">
                    <div class="card card-user">
                      <div class="card-header">
                        <h5 class="card-title">Editar Perfil</h5>
                      </div>
                      <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input value="{{auth()->user()->name}}" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                                
                            </div>

                            <div class="row">
                            
                                <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="dataNasc">Data de nascimento</label>
                                    <input class="form-control" type="date" id="dataNasc" name="dataNasc" value="{{auth()->user()->dataNasc}}" required>
                                </div>
                                </div>
                                <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label for="tipoSangue">Tipo sanguíneo</label>
                                    <select class="form-control" id="tipoSangue" name="tipoSangue" required >
                                  
                                      @if(auth()->user()->tipoSangue == "Não sei")
                                        <option selected> Não sei </option>
                                      @else
                                        <option> Não sei </option>
                                      @endif
                                      
                                      @if(auth()->user()->tipoSangue == "A+")
                                        <option selected> A+ </option>
                                      @else
                                        <option> A+ </option>
                                      @endif
                                      @if(auth()->user()->tipoSangue == "A-")
                                        <option selected> A- </option>
                                      @else
                                        <option> A- </option>
                                      @endif
                                      @if(auth()->user()->tipoSangue == "B+")
                                        <option selected> B+ </option>
                                      @else
                                        <option> B+ </option>
                                      @endif
                                      @if(auth()->user()->tipoSangue == "B-")
                                        <option selected> B- </option>
                                      @else
                                        <option> B- </option>
                                      @endif
                                      @if(auth()->user()->tipoSangue == "AB+")
                                        <option selected> AB+ </option>
                                      @else
                                        <option> AB+ </option>
                                      @endif
                                      @if(auth()->user()->tipoSangue == "AB-")
                                        <option selected> AB- </option>
                                      @else
                                        <option> AB- </option>
                                      @endif
                                      @if(auth()->user()->tipoSangue == "O+")
                                        <option selected> O+ </option>
                                      @else
                                        <option> O+ </option>
                                      @endif
                                      @if(auth()->user()->tipoSangue == "O-")
                                        <option selected> O- </option>
                                      @else
                                        <option> O- </option>
                                      @endif

                                    </select>
                                </div>
                                </div>
                                <div class="col-md-5 pl-1">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{auth()->user()->email}}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                
                                </div>
                                </div>
                            
                                
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label>Endereço</label>
                                    <input type="text" id="endereco" name="endereco" class="form-control" value="{{auth()->user()->endereco_id}}" required>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input type="text" id="cidade" name="cidade" class="form-control" value="{{auth()->user()->cidade}}" required>
                                </div>
                                </div>
                                <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>País</label>
                                    <input type="text" id="pais" name="pais" class="form-control" value="{{auth()->user()->pais}}" required>
                                </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Cep</label>
                                    <input type="number" id="cep" name="cep" class="form-control" value="{{auth()->user()->cep}}" required> 
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sobre mim</label>
                                    <textarea class="form-control textarea" id="sobre" name="sobre">{{auth()->user()->sobre}}</textarea>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="password">Senha</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                </div>
                                
                                <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="password-confirm">Confirmar senha</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">{{ __('Salvar') }}</button>
                                </div>
                            </div>
                        </form>                        
                      
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            <!-- Content -->

            
            <!-- footer -->
            @component('footer')
            @endcomponent
      
        </div>
    </div>
    


@endsection

