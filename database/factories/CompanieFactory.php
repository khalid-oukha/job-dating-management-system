<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Companie>
 */
class CompanieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'title' => $this->faker->sentence,
            'founded_at' => $this->faker->date,
            'address' => $this->faker->address,
            'description' => $this->faker->sentence,
        ];

    }
}
