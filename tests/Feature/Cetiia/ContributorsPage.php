<?php

namespace Tests\Feature\Cetiia;

use Tests\TestCase;

class ContributorsPage extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function prueba_que_la_pagina_de_contribuidores_funcione_correctamente(): void
    {
        $response = $this->get('/contributors');

        $response->assertStatus(200);
    }
}
