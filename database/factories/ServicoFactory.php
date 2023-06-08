<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descricao' => $this->faker->colorName(),
            'preco' => $this->faker->numberBetween(2,500),
            'dias_vencimento' => $this->faker->numberBetween(7,40),
            'empresas_id' => (\App\Models\Empresa::factory()->create())->id,
        ];
    }
}
