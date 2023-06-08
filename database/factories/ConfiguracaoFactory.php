<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConfiguracaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cor_tema' => 'dark',
            'users_id' => (\App\Models\User::factory()->create())->id,
        ];
    }
}
