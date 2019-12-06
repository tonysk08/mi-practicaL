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
    return view('welcome');
});

Route::get('/user', function(){
    return 'Users';
});

Route :: get ('/user/{id}',function($id){
    return "Mostrando informacion del usuario: {$id}";
})-> where('id','[0-9]');

Route :: get ('/user/new', function(){
    return 'Crear usuario nuevo';
});

Route::get('/saludo/{name}/{nickname?}', function($name,$nickname=null){
    if($nickname){
        return "bienvenido {$name}, tu apodo es {$nickname}";
    }
    else{
        return "Bienvenido {$name}";
    }
});