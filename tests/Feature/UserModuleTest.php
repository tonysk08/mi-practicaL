<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_Load_User_list()
    {
        $this->get('/user')
        ->assertStatus(200)
        ->assertSee('Users');
    }
}
