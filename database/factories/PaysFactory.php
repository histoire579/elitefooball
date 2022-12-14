<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'drapeau' => $this->faker->imageUrl(),
            'nom' => $this->faker->name()
        ];
    }
}
