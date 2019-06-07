
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
                            
                            @if(auth()->user()->endereco_id)
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
                            @endif

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
                                @if(!auth()->user()->endereco_id)
                                  <div class="update ml-auto mr-auto">
                                      <button type="button" class="btn btn-secondary btn-round" role="button" onclick="novoEndereco()">Cadastrar endereço</button>
                                  </div>
                                @endif
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">{{ __('Salvar') }}</button>
                                </div>
                            </div>
                        </form>                        
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              

                <div class="modal" tabindex="-1" role="dialog" id="dlgEndereco2">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form class="form-horizontal" id="formEndereco">
                        <div class="modal-header">
                          <h5 class="modal-title">Novo endereco</h5>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" id="id" class="form-control">
                          <div class="form-group">
                            <label for="rua">Rua</label>
                            <input type="text" class="form-control" id="rua">
                          </div>
                          <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" id="bairro">
                          </div>
                          <div class="form-group">
                            <label for="numero">Numero</label>
                            <input type="text" class="form-control" id="numero">
                          </div>
                          <div class="form-group">
                            <label for="pais">Pais</label>
                            <input type="text" class="form-control" id="pais">
                          </div>
                          <div class="form-group">
                            <label for="uf">Uf</label>
                            <input type="text" class="form-control" id="uf">
                          </div>
                          <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" id="cidade">
                          </div>
                          <div class="form-group">
                            <label for="cep">Cep</label>
                            <input type="text" class="form-control" id="cep">
                          </div>
                          <div class="form-group">
                            <label for="obs">OBS</label>
                            <input type="text" class="form-control" id="obs">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Salvar</button>
                          <button type="cancel" class="btn btn-secondary" data-dissmiss="modal">Cancelar</button>

                        </div>
                      </form>
                    </div>
                  </div>
                </div>



                <div class="row modal" tabindex="-1" role="dialog" id="dlgEndereco">
                    <div class="modal-dialog modal-lg col-md-12" role="document">
                        <div class="modal-content card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Cadastre o seu endereço</h5>
                            </div>
                            <div class="card-body">
                                <form id="form-endereco">
                                
                                    <div class="row">
                                        <div class="col-md-7 pr-1">
                                            <div class="form-group">
                                                <label for="rua">Rua</label>
                                                <input type="text" class="form-control" id="rua">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                <label for="bairro">Bairro</label>
                                                <input type="text" class="form-control" id="bairro">
                                            </div>
                                        </div>
                                        <div class="col-md-2 pl-1">
                                          <div class="form-group">
                                              <label for="numero">Número</label>
                                              <input type="number" class="form-control" id="numero">
                                          </div>
                                      </div>
                                    </div>
                                    
                                    <div class="row">
                                      <div class="col-md-4 pr-1">
                                          <div class="form-group">
                                              <label for="pais">País</label>
                                              <input type="text" class="form-control" id="pais">
                                          </div>
                                      </div>
                                      <div class="col-md-2 px-1">
                                        <div class="form-group">
                                            <label for="uf">Estado</label>
                                            <input type="text" class="form-control" id="uf">
                                        </div>
                                    </div>
                                      <div class="col-md-3 px-1">
                                          <div class="form-group">
                                              <label for="Cidade">Cidade</label>
                                              <input type="text" class="form-control" id="cidade">
                                          </div>
                                      </div>
                                      <div class="col-md-3 pl-1">
                                        <div class="form-group">
                                            <label for="cep">CEP</label>
                                            <input type="number" class="form-control" id="cep">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                      <div class="form-group">
                                          <label>Complemento</label>
                                          <textarea class="form-control textarea" id="complemento" name="complemento"></textarea>
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
              
              
              </div>
            <!-- Content -->


            <!-- footer -->
            @component('footer')
            @endcomponent
      
        </div>
    </div>
    


@endsection

@section('javascript')

    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': "{{csrf_token() }}"
        }
      });

      function criarEndereco(){
        end = {
          rua: $("#rua").val(),
          bairo: $("#bairo").val(),
          numero: $("#numero").val(),
          uf: $("#uf").val(),
          cidade: $("#cidade").val(),
          cep: $("#cep").val(),
          cep: $("#pais").val(),
          complemento: $("#complemento").val()
        };
        $.post("/enderecos", end, function(data){

        });
      }

      // $("#form-endereco").submit( function(event){
      //   event.preventDefault()
      // });

      function novoEndereco(){
        $('#rua').val('');
        $('#bairro').val('');
        $('#numero').val('');
        $('#pais').val('');
        $('#uf').val('');
        $('#cidade').val('');
        $('#cep').val('');
        $('#complemento').val('');
        $('#dlgEndereco2').modal('show')  
      }
    </script>


@endsection