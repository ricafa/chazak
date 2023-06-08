<?php

namespace Database\Factories;

use App\Enums\FormaPagamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class AtendimentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dia' => $this->faker->colorName(),
            'forma_pagamento' => FormaPagamento::DINHEIRO,
            'preco_total' => $this->faker->numberBetween(7,40),
            'pago' => true,
            'clientes_id' => (\App\Models\Cliente::factory()->create())->id,
            'empresas_id' => (\App\Models\Empresa::factory()->create())->id,
        ];
    }
}
