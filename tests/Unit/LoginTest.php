<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    private $email = 'jjrb6@hotmail.com';
    private $password = '123';


    /**
     * Login user
     *
     * @return void
     */
    public function testLogin()
    {
        $body = [
            'email' => $this->email,
            'password' => $this->password
        ];

        $response = $this->withHeaders(['Accept' => 'application/json'])
            ->json('POST', 'api/login', $body);

        $response
            ->assertStatus(200)
            ->assertJson(['success' => true]);

        return $response->json()['success']['token'];
    }
}
