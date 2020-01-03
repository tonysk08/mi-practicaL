<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserModuleController extends Controller
{
    public function UserList(){
        return 'Users';
    }

    public function UserDetail($id){
        return "Mostrando informacion del usuario: {$id}";
    }

    public function UserEditInfo(){
        return "Editar ifnormaciond de un usuario";
    }

    public function UserNew(){
        return 'Crear usuario nuevo';
    }
    
    public function UserWelcome($name,$nickname=null){
        if($nickname){
            return "bienvenido {$name}, tu apodo es {$nickname}";
        }
        else{
            return "Bienvenido {$name}";
        }
    }
}
