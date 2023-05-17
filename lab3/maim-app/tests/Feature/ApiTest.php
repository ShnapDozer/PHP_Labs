<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/docs/swagger');

        $response->assertStatus(200);
        // $response->assertJsonStructure([
        //     '*' => ['id', 'name', 'email'],
        // ]);
    }
}