
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
                                    <input class="form-control" type="date" id="dataNasc" name="dataNasc" value="{{ \Carbon\Carbon::createFromDate(auth()->user()->dataNasc)->format('Y-m-d')}}" required>
                                </div>
                                </div>
                                <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label for="tipoSangue">Tipo sanguíneo</label>
                                    <select class="form-control" id="tipoSangue" name="tipoSangue" required >
                                      <option value="" >Não sei</option>
                                        {{ $sangue = \App\Sangue::all() }}                                               
                                        @foreach($sangue as $s)
                                          @if($s->id == auth()->user()->sangue->id)
                                            <option value="" selected> {{$s->tipo}} </option>         
                                          @endif
                                          <option value="{{$s->id}}"> {{$s->tipo}} </option>   
                                        @endforeach

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

