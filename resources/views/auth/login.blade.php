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
                                    você pode criar <a href="/register"><b> aqui </b></a>
                                </p>

                                <!-- Form inicio-->
                                <form method="POST" action="{{ route('login') }}"> 
                                    @csrf   
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label for="email">Login</label>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-6">
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
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary btn-round">{{ __('Login') }}</button>
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
                                            <h5>{{ $sangue = \App\User::count() }}
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

