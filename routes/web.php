<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/', function(){
    return view ('index');
});

// -- USUÁRIO --

Route::prefix('usuario')->group(function(){
    Route::get('/', function(){
        return "USUÁRIO";
    });
    Route::get('novo', function(){
        return view('novoUsuarioz');
    }); 
    Route::get('editar', function(){
        return "EDITAR USUÁRIO";
    });
    Route::get('excluir', function(){
        return "EXCLUIR USUÁRIO";
    });  
});

// -- DASHBOARD --

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index');
    // Route::get('/novo', 'PostosController@create');
    // Route::post('/', 'PostosController@store');
    // Route::get('/editar/{id}', 'PostosController@edit'); 
    // Route::post('/{id}', 'PostosController@update'); 
    // Route::get('/apagar/{id}', 'PostosController@destroy'); 

});


// -- POSTOS --

Route::prefix('postos')->middleware('auth')->group(function(){
    Route::get('/', 'PostosController@index');
    Route::get('/novo', 'PostosController@create');
    Route::post('/', 'PostosController@store');
    Route::get('/editar/{id}', 'PostosController@edit'); 
    Route::post('/{id}', 'PostosController@update'); 
    Route::get('/apagar/{id}', 'PostosController@destroy'); 

});

// -- INSTRUÇÕES PARA DOAÇÃO --

Route::prefix('instrucoes')->middleware('auth')->group(function(){
    Route::get('/', 'InstrucoesController@index');
    Route::get('/novo', 'InstrucoesController@create');
    Route::post('/', 'InstrucoesController@store');
    Route::get('/editar/{id}', 'InstrucoesController@edit'); 
    Route::post('/{id}', 'InstrucoesController@update'); 
    Route::get('/apagar/{id}', 'InstrucoesController@destroy');
    Route::get('/{tipo}', 'InstrucoesController@show');

});

// -- DISPONIBILIDADE --

Route::prefix('agendamento')->middleware('auth')->group(function(){
    Route::get('/', 'AgendamentoController@index');
    Route::get('/novo', 'DisponibilidadeController@create');
    Route::post('/', 'AgendamentoController@store');
    Route::get('/editar/{id}', 'DisponibilidadeController@edit'); 
    Route::post('/{id}', 'DisponibilidadeController@update'); 
    Route::get('/apagar/{id}', 'DisponibilidadeController@destroy'); 

});


// -- USUÁRIOS --

Route::prefix('usuarios')->middleware('auth')->group(function(){
    Route::get('/', 'UsuarioController@index');
    Route::get('/novo', 'DisponibilidadeController@create');
    Route::post('/', 'DisponibilidadeController@store');
    Route::get('/editar/{id}', 'DisponibilidadeController@edit'); 
    Route::post('/{id}', 'DisponibilidadeController@update'); 
    Route::get('/apagar/{id}', 'DisponibilidadeController@destroy'); 

});


// -- DOAÇÕES --

Route::prefix('doacoes')->middleware('auth')->group(function(){
    Route::get('/', 'DoacaoController@index');
    Route::get('/novo', 'DoacaoController@create');
    Route::post('/', 'DoacaoController@store');
    Route::get('/editar/{id}', 'DoacaoController@edit'); 
    Route::post('/{id}', 'DoacaoController@update'); 
    Route::get('/apagar/{id}', 'DoacaoController@destroy'); 

});


// -- PERFIL --

Route::prefix('perfil')->middleware('auth')->group(function(){
    Route::get('/', 'PerfilController@index');
    // Route::get('/novo', 'DoacaoController@create');
    // Route::post('/', 'DoacaoController@store');
    // Route::get('/editar/{id}', 'DoacaoController@edit'); 
     Route::post('/{id}', 'PerfilController@update'); 
    // Route::get('/apagar/{id}', 'DoacaoController@destroy'); 

});



// -- PERFIL --

Route::prefix('alertas')->middleware('auth')->group(function(){
    Route::get('/', 'AlertaController@index');
    // Route::get('/novo', 'DoacaoController@create');
    // Route::post('/', 'DoacaoController@store');
    // Route::get('/editar/{id}', 'DoacaoController@edit'); 
    // Route::post('/{id}', 'DoacaoController@update'); 
    // Route::get('/apagar/{id}', 'DoacaoController@destroy'); 

});

Route::post('/enderecos', 'EnderecoController@store');

Route::prefix('atestados')->middleware('auth')->group(function(){
    Route::get('/', 'AtestadoController@index');
});


//login - DEV
Route::get('/log', 'DoacaoController@log');