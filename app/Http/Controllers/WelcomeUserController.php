<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function Index($name,$nickname=null){
        if($nickname){
            return "bienvenido {$name}, tu apodo es {$nickname}";
        }
        else{
            return "Bienvenido {$name}";
        }
    }
}
