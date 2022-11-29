<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
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
            'taille' => $this->faker->ean8(),
            'poids' => $this->faker->ean8(),
            'pied_fort' => $this->faker->name()
        ];
    }
}
