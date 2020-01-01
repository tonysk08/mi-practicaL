<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    function Load_users_List_Test(){
        $this->get('/user')
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
        $this->get('/user/1/edit')
            ->assertStatus(200)
            ->assertSee("Editando informacion del usuario Nº 1");
    }

    /** @test */
    function Load_new_User_Test(){
        $this->get('/user/new')
            ->assertStatus(200)
            ->assertSee('Crear usuario nuevo');
    }
} 
