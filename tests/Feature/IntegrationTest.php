<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IntegrationTest extends TestCase
{
    public function test_integration_data_api()
    {
        $response = $this->get('/api/integrations');

        $response
            ->assertStatus(200)
            ->assertSee(['integration' => 'Keap'])
            ->assertSee(['integration' => 'Quickbooks']);
    }
}
