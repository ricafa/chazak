<?php

namespace Database\Factories;

use App\Models\User;
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
            'users_id' => (User::factory()->create())->id,
        ];
    }
}
