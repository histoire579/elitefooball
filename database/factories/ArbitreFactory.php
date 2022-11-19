<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArbitreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo' => $this->faker->imageUrl(),
            'nom' => $this->faker->name(),
            'date_nais' => $this->faker->date(),
            'pays_id' => rand(1,3),
            'lieu_nais' => $this->faker->Address(),
            'status' => $this->faker->sentence(1),
            'annee_debut_elite' => $this->faker->date()
        ];
    }
}
