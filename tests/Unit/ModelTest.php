<?php

namespace Tests\Unit;

use App\Models\Atendimento;
use App\Models\AtendimentoServico;
use App\Models\Cliente;
use App\Models\Configuracao;
use App\Models\Empresa;
use App\Models\Servico;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ModelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_EmpresaModel()
    {
        $empresa = Empresa::factory()->create();
        $this->assertModelExists($empresa);
    }

    public function test_UserModel()
    {
        $user = User::factory()->create();
        $this->assertModelExists($user);
    }

    public function test_ClienteModel()
    {
        $cliente = Cliente::factory()->create();
        $this->assertModelExists($cliente);
    }

    public function test_ServicoModel()
    {
        $servico = Servico::factory()->create();
        $this->assertModelExists($servico);
    }

    public function test_AtendimentoModel()
    {
        $atendimento = Atendimento::factory()->create();
        $this->assertModelExists($atendimento);
    }

    public function test_AtendimentoServicoModel()
    {
        $atendimentoServico = AtendimentoServico::factory()->create();
        $this->assertModelExists($atendimentoServico);
    }

    public function test_ConfiguracaoModel()
    {
        $configuracao = Configuracao::factory()->create();
        $this->assertModelExists($configuracao);
    }
}
