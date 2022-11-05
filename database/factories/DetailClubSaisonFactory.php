<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailClubSaisonFactory extends Factory
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
            'club_id' => rand(1,3),
            'joueur_id' => rand(1,3),
            'poste_id' => rand(1,3),
            'dorssad' => rand(1,100)
        ];
    }
}
