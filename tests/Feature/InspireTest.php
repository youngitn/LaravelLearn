<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InspireTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInspire()
    {
        $response = $this->get('/inspire');
        $response->assertStatus(200);
    }
}
