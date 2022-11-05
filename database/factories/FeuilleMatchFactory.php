<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeuilleMatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'match_id' => rand(1,3),
            'club_id' => rand(1,3),
            'joueur_id' => rand(1,3),
            'titularisation' => $this->faker->sentence(1)
        ];
    }
}
