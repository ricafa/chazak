<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
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
            'logo' => $this->faker->filePath(),
            'tipo' => $this->faker->numberBetween(0,2),
        ];
    }
}
