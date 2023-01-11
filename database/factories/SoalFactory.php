<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Soal>
 */
class SoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mapel_id' => fake()->numberBetween(1, 3),
            'pertanyaan' => fake()->paragraph(),
            'a' => fake()->word(),
            'b' => fake()->word(),
            'c' => fake()->word(),
            'd' => fake()->word(),
            'jawaban' => fake()->randomElement(['a','b','c','d']),
        ];
    }
}
