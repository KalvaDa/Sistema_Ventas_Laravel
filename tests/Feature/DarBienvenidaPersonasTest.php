<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DarBienvenidaPersonasTest extends TestCase
{
    /**   
     * @return void
     */
    public function testPersonasSinApellido()
    {
        $this->get('/personas/darwin')
        ->assertStatus(200)
        ->assertSee('Darwin, no tienes apellido');
    }

    public function testPersonasConApellido()
    {
        $this->get('/personas/Darwin/Calva')
        ->assertStatus(200)
        ->assertSee('Darwin Calva');
    }
}
