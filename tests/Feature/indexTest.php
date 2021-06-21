<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\EventController;
use Tests\TestCase;

class indexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_indexTest()
    {
        $this->withoutExceptionHandling();
        
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
