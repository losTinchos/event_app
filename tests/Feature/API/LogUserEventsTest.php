<?php

namespace Tests\Feature\API;

use App\Http\Controllers\API\EventController;
use App\Http\Controllers\EventController as ControllersEventController;
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
        $event = Event::factory(2)->create();
        $user = User::factory(2)->create();

        $user[0]->get(route('signUpEvent', $event[1]->id));
        $user[1]->get(route('signUpEvent', $event[1]->id));
        
        $response = $this->get('/api/events/1/subscribers');
        $response->assertStatus(200)
        ->assertJsonCount(2);
    }
}
