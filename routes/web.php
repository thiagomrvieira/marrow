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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');



// -- USUÁRIO --

Route::prefix('usuario')->group(function(){
    Route::get('/', function(){
        return "USUÁRIO";
    });
    Route::get('novo', function(){
        return view('novoUsuario');
    }); 
    Route::get('editar', function(){
        return "EDITAR USUÁRIO";
    });
    Route::get('excluir', function(){
        return "EXCLUIR USUÁRIO";
    });  
});