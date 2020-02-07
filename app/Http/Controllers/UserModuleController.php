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
            'Maykol'
        ];
        $title = 'Listado De Usuarios';
        return view('users.index',['UsersList'=> $UsersList, 'title' => $title]);
    }

    public function UserDetail($id){
        $title='Detalles del usuario';
        return view('users.detail',compact('id'),['title' => $title]);
    }

    public function UserEditInfo(){
        $title='Edit Info User';
        return view('users.edit',['title' => $title]);
    }

    public function UserNew(){
        $title='New User';
        return view('users.new',['title' => $title]);
    }
}
