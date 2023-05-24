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

    public function test_should_update_an_exhibition(): void
    { 
        $exhibition = Exhibition::factory()->create();
        $newData = Exhibition::factory()->raw();
        $response = $this->put("/exhibitions/{$exhibition->id}", $newData);
        $response->assertOk();
        $this->assertDatabaseHas('exhibitions', array_merge(['id' => $exhibition->id], $newData));
    }

    public function test_should_delete_an_exhibition(): void
    {
        $exhibition = Exhibition::factory()->create();
        $response = $this->delete("/exhibitions/{$exhibition->id}");
        $this->assertDatabaseMissing('exhibitions', ['id' => $exhibition->id]);
    }
}

    