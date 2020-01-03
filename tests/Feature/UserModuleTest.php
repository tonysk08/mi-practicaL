<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    function Load_users_List_Test(){
        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('Users');
    }
    
    /** @test */
    function Load_user_info(){
        $this->get('/user/5')
            ->assertStatus(200)
            ->assertSee("Mostrando informacion del usuario: 5");
    }

    /** @test */
    function Edit_user_info_test(){
        $this->get('user/edit')
            ->assertStatus(200)
            ->assertSee("Editar ifnormaciond de un usuario");
    }
  

    /** @test */
    function Load_new_User_Test(){
        $this->withoutExceptionHandling();
        $this->get('/user/new')
            ->assertStatus(200)
            ->assertSee('Crear usuario nuevo');
    }
} 
