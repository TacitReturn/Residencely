<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetRouteTest extends TestCase
{
    /**
     * Landing page test.
     *
     * @return void
     */
    public function test_get_landing_page()
    {
        $response = $this->get("/");

        $response->assertStatus(200);
    }

    /**
     * Register page test.
     *
     * @return void
     */
    public function test_get_register_page()
    {
        $response = $this->get("/");

        $response->assertStatus(200);
    }

    /**
     * Login page test.
     *
     * @return void
     */
    public function test_get_login_page()
    {
        $response = $this->get("/login");

        $response->assertStatus(200);
    }
}
