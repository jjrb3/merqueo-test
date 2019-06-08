<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InvetoriesTest extends TestCase
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
    public function testProductsToPrepare()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => "Bearer {$this->login()}"
        ])
            ->json('GET', 'api/get-products-to-prepare');

        $response
            ->assertStatus(200);
    }


    /**
     * Get products to prepare and supply
     *
     * @return void
     */
    public function testProductsToPrepareAndSupply()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => "Bearer {$this->login()}"
        ])
            ->json('GET', 'api/get-products-to-prepare-and-supply/4');

        $response
            ->assertStatus(200);
    }
}
