<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUrl()
    {
        $response = $this->get('/news');
        $response->assertStatus(200);
        $response = $this->get('news/greeting');
        $response->assertStatus(500);
        $response = $this->get('news/store');
        $response->assertStatus(405);
    }
}
