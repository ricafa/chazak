<?php

namespace Tests\Feature\Integration;

use App\Models\Cliente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Clientes extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_clientes_index_ok()
    {
        $response = $this->get('/clientes');
        $response->assertStatus(200);
    }
    public function test_clientes_create_ok()
    {
        $response = $this->get('/clientes/create');
        $response->assertStatus(200);
    }
    public function test_clientes_update_ok()
    {
        $cliente = Cliente::factory()->create();
        $cliente->save();
        $response = $this->get('/clientes/1');
        $response->assertStatus(200);
    }
}
