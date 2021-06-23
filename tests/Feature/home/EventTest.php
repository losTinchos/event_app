<?php

namespace Tests\Feature\home;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventTest extends TestCase
{
    
    //vaciar db primero
    use RefreshDatabase;

    public function test_AnyUserCanSeeListEventsFutur()
    {
        //crear 2 eventos en la db
        $events=Event::factory(5)->create();
    
        //when SUT llamar una ruta (web.php)
        $response = $this->get(route('home'));

        //then
        $response->assertStatus(200)
                 ->assertViewIs('home')
                 ->assertSee($events[0]->title);
       
    
    }

}
