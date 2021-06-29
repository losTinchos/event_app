<?php

namespace Tests\Feature\API;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Event;

use Tests\TestCase;

class LogUserEventsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_checkIfEventsAreListedInJsonFile()
    {
        Event::factory(2)->create();

        $response = $this->get('/api/events');

        $response->assertStatus(200)
                ->assertJsonCount(2);
    }

    public function test_checkIfSignedUpEventsLogInJson()
    {
        $users = User::factory(2)->create();
        $event = Event::factory()->create();
        

        $event->users()->attach($users);

        $response = $this->get('/api/events/1/subscribers');
        $response->assertStatus(200)
                ->assertJsonCount(2);
    }
}
