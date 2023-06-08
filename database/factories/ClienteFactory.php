<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'nascimento' => $this->faker->date(),
            'email' => $this->faker->email(),
            'celular' => $this->faker->phoneNumber(),
            'empresas_id' => (Empresa::factory()->create())->id,
        ];
    }
}
