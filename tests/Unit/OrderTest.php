<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
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
     * Get enlisted products
     *
     * @return void
     */
    public function testGetEnlistedProducts()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => "Bearer {$this->login()}"
        ])
            ->json('GET', 'api/get-less-sold-products/2019-03-01');

        dd($response);

        /*$response
            ->assertStatus(200);*/
    }
}
