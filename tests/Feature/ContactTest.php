<?php

namespace Tests\Feature;

use App\Models\KeapContacts;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase {

    public function test_contacts_page()
    {
        $user     = User::first();
        $response = $this->actingAs($user)->get('/contacts');
        $response->assertStatus(200);
    }

    public function test_contacts_api()
    {
        $response = $this->get('api/contacts');
        $response->assertStatus(200)->assertSee(['status' => true]);
    }


    public function test_contacts_update_api()
    {
        $user     = User::first();
        $contact  = KeapContacts::first();
        $fakerQBO = rand(3,4);
        $response = $this->actingAs($user)->post('api/contacts/' . $contact?->id, ['customer' => $fakerQBO]);
        $response->assertStatus(200);

        if($contact) {
            $this->assertDatabaseHas('keap_contacts', ['qbo_id' => $fakerQBO]);
        }
    }
}
