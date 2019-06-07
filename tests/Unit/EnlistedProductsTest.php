<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Unit\LoginTest;

class EnlistedProductsTest extends TestCase
{
    /**
     * Login
     *
     * @return string
     */
    public function login(): string {

        $body = [
            'email' => 'jjrb6@hotmail.com',
            'password' => '123'
        ];

        $response = $this->withHeaders(['Accept' => 'application/json'])
            ->json('POST', 'api/login', $body);

        return $response->json()['success']['token'];
    }


    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGetUser()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => "Bearer {$this->login()}"
        ])
            ->json('GET', 'api/get-enlisted-products');


        dd($response->json());
    }
}
