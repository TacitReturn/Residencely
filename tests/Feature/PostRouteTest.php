<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostRouteTest extends TestCase
{
    /**
     * Test user registration.
     *
     * @return void
     */
    public function test_register_user()
    {
        $response = $this->post('/register', [
            "name" => "john smith",
            "email" => "john@example.com",
            "password" => "password",
        ]);

        $response->assertStatus(201);
    }
}
