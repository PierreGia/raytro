<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\retrospective>
 */
class retrospectiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'question' => fake()->sentence,
            'date_debut' => now(),
            'date_fin' =>fake()->dateTimeBetween('date_debut', 'now')
        ];
    }
}
