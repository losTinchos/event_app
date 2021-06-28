<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventSubscriptionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_guestUserCanNotSubscribe()
    {
        $event = Event::factory()->create();

        $response = $this->get(route('signUpEvent', $event->id));
        $response->assertStatus(302)
                 ->assertRedirect('/login');
    }
}
