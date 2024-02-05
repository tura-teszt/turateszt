<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TuraTipus>
 */
class TuraTipusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'turanev' => fake('hu_HU')->word(),
            'tajegyseg' => fake('hu_HU')->state(),
            'nehezseg' => rand(1,5), 
            'tavolsag' => rand(11,99),
            'szintkulonbseg' => rand(1,1000),
            'kerekpar' => rand(0,1),
        ];
    }
}
