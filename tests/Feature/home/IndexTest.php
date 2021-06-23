<?php

namespace Tests\Feature\home;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_viewIndex()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
