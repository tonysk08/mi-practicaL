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

Route::get('/users', 'UserModuleController@UserList');

Route :: get ('/user/{id}','UserModuleController@UserDetail')-> where('id','[0-9]');

Route :: get ('/user/new','UserModuleController@UserNew');

Route :: get('user/edit','UserModuleController@UserEditInfo');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController@Index');