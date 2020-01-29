<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserModuleController extends Controller
{
    public function UserList(){
        $UsersList = [
            'Joel',
            'Marcos',
            'Miguel',
            'Tomas',
            'Angel',
            'Erick',
            'Jose',
            'Maykol',
            '<script>alert("clicker")</script>'
        ];
        return view('users',['UsersList'=> $UsersList, 'title' => 'Listado']);
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
}
