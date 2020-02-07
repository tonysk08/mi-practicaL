<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function Index($name,$nickname=null){
        $title='Saludo';
        if($nickname){
            return view('users.saludo',['texto'=>"Bienvenido {$name}, tu apodo es {$nickname}", 'title' => $title]);
        }
        else{
            return view('users.saludo',['texto'=>"Bienvenido {$name}",'title' => $title]);
        }
    }
}
