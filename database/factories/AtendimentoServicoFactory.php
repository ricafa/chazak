<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AtendimentoServicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'preco' => $this->faker->numberBetween(7,40),
            'atendimentos_id' => (\App\Models\Atendimento::factory()->create())->id,
            'servicos_id' => (\App\Models\Servico::factory()->create())->id,
        ];
    }
}
