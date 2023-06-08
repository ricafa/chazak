<?php

namespace Tests\Feature;

use App\Models\Empresa;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ModelEmpresa extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_empresaModel()
    {
        $empresa = Empresa::factory()->create();
        $this->assertModelExists($empresa);
    }

    public function test_empresaCount()
    {
        \App\Models\Empresa::factory(10)->create();
        $this->assertDatabaseCount('empresas', 10);
    }

    public function test_userCount()
    {
        \App\Models\User::factory(10)->create();
        $this->assertDatabaseCount('users', 10);
    }

    public function test_UserModel()
    {
        $user = User::factory()->create();
        $this->assertModelExists($user);
    }
}
