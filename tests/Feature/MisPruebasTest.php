<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MisPruebas extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRutas()
    {
        $response = $this->get('/peliculas');

        $response->assertStatus(200);
        $response->assertSee("Avatar");
        
        
    }
}
