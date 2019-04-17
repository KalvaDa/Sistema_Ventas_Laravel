<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    public function pagina_usuarios_si_lista_vacia()
    {
        // verifica si existe usuarios, si devuelve 'Usuarios'
        $this->get('/usuarios?algo')
        ->assertStatus(200)
        ->assertSee('Usuarios')
        ->assertSee('Darwin');
    }
    public function pagina_usuarios_si_lista_no_vacia()
    {
        // verifica si existe usuarios, si devuelve 'Usuarios'
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('Lista vacia');
    }

    public function test_verificar_load_clientes()
    {
        $this->withoutExceptionHandling();
        $this->get('/clientes/Darwin')
        ->assertStatus(200)
        ->assertSee('Hola soy Darwin');
    }
}
