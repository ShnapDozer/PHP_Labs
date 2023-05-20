<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Exhibition;

class ApiTest extends TestCase
{
    public function test_should_return_an_exhibition_by_id(): void
    {
        $response = $this->get("/exhibitions/1");
        $response->assertOk();
        $response->assertJsonFragment(['id' => 1]);
    } 

    public function test_should_create_an_exhibition(): void
    { 
        $exhibitionData = Exhibition::factory()->raw();
        $response = $this->post('/exhibitions', $exhibitionData);
        $response->assertCreated();
        $this->assertDatabaseHas('exhibitions', $exhibitionData);
    }
}

    