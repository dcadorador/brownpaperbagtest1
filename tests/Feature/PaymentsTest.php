<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaymentsTest extends TestCase
{
    public function test_payments_api()
    {
        $response = $this->get('/api/payments');

        $response
            ->assertStatus(200)
            ->assertSee(['status' => true]);
    }

    public function test_payments_page()
    {
        $user     = User::first();
        $response = $this->actingAs($user)->get('/payments');

        $response
            ->assertStatus(200);
    }
}
