<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase {

    public function test_login_page()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_api_login_failed()
    {
        $response = $this->post('/api/login', [
            'email'    => 'somerandom@email.com',
            'password' => 'somepassword'
        ]);

        $response->assertStatus(200)->assertSee(['status' => false]);
    }


    public function test_api_login_success()
    {
        $response = $this->post('/api/login', [
            'email'    => 'drew.adorador07@gmail.com',
            'password' => 'password'
        ]);

        $this->assertAuthenticated();
        $response
            ->assertStatus(200)
            ->assertSee(['status' => true]);
    }

}
