<?php

namespace Tests\Feature\home;

use App\Models\User;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventSubcriptionTest extends TestCase
{
    use RefreshDatabase;

    public function test_notLoginUserCanNotInscription()
    {
        $event=Event::factory()->create();

        $response = $this->get(route('subscribe',$event->id));

        $response->assertStatus(500)
                 ->assertRedirect("/login");

    }

    public function test_UserAuthCanInscription()
    {
        $event=Event::factory()->create();
        $user=User::factory()->create();

        $this->actingAs($user);

        $response = $this->get(route('subscribe',$event->id));

        $this->assertEquals($user->id,$event->users[0]->id);

    }    

}
