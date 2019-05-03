@extends('layouts.dash')

@section('body')
    <div class="wrapper ">
        <div class="log ">

            <div class="content">
                <div class="row">
                    <div class="col-md-8 container">
                        <div class="card card-user">
                            <div class="image">
                                <img src="{{asset('/img/damir-bosnjak.jpg')}}" alt="...">  
                            </div>
                        
                            <div class="card-body">
                                <div class="author">
                                    <img class="avatar border-gray" src="{{asset('/img/default-avatar.png')}}" alt="..."> 
                                    <h5 class="title">Crie a sua conta</h5>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input placeholder="José" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label>Sobrenome</label>
                                            <input id="sobrenome" name="sobrenome" type="text" class="form-control" placeholder="Silva" required>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    
                                        <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label for="dataNasc">Data de nascimento</label>
                                            <input class="form-control" type="date" id="dataNasc" name="dataNasc" required>
                                        </div>
                                        </div>
                                        <div class="col-md-3 px-1">
                                        <div class="form-group">
                                            <label for="tipoSangue">Tipo sanguíneo</label>
                                            <select class="form-control" id="tipoSangue" name="tipoSangue" required >
                                                <option>Não sei</option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                                <option>AB+</option>
                                                <option>AB-</option>
                                                <option>O+</option>
                                                <option>O-</option>

                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-5 pl-1">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                            <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Rua José Silva, Centro" required>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Maceió" required>
                                        </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>País</label>
                                            <input type="text" id="pais" name="pais" class="form-control" placeholder="Brasil" required>
                                        </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Cep</label>
                                            <input type="number" id="cep" name="cep" class="form-control" placeholder="57000-000" required> 
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Sobre mim</label>
                                            <textarea class="form-control textarea" id="sobre" name="sobre">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
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
                                            <button type="submit" class="btn btn-primary btn-round">{{ __('Register') }}</button>
                                        </div>
                                    </div>
                                </form>

                                <!-- INicio -->

                                <!-- <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo sanguíneo') }}</label>

                                        <div class="col-md-6">
                                            
                                            <select class="form-control" id="tipo" name="tipo" required >
                                                <option>Não sei</option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                                <option>AB+</option>
                                                <option>AB-</option>
                                                <option>O+</option>
                                                <option>O-</option>

                                            </select>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form> -->

                                <!-- fim -->

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

