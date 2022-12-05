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
            'saison_id' => rand(1,3),
            'match_id' => rand(1,15),
            'club_id' => rand(1,6),
            'joueur_id' => rand(1,20)
        ];
    }
}
