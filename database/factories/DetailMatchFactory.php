<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailMatchFactory extends Factory
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
            'club1_id' => rand(1,3),
            'nbre_but_club1' => rand(1,3),
            'club2_id' => rand(4,6),
            'nbre_but_club2' => rand(0,3),
            'possession_club1' => rand(1,3),
            'possession_club2' => rand(1,3),
            'nbre_tir_club1' => rand(1,3),
            'nbre_tir_club2' => rand(1,3),
            'nbre_tir_cadre_club1' => rand(1,3),
            'nbre_tir_cadre_club2' => rand(1,3),
            'nbre_tir_arrete_club1' => rand(1,3),
            'nbre_tir_arrete_club2' => rand(1,3),
            'nbre_faute_club1' => rand(1,3),
            'nbre_faute_club2' => rand(1,3),
            'nbre_hors_jeu_club1' => rand(1,3),
            'nbre_hors_jeu_club2' => rand(1,3),
            'nbre_carton_jaune_club1' => rand(1,3),
            'nbre_carton_jaune_club2' => rand(1,3),
            'nbre_carton_rouge_club1' => rand(1,3),
            'nbre_carton_rouge_club2' => rand(1,3),
            'nbre_corner_club1' => rand(1,3),
            'nbre_corner_club2' => rand(1,3),
            'nbre_centre_club1' => rand(1,3),
            'nbre_centre_club2' => rand(1,3),
            'nbre_tacle_club1' => rand(1,3),
            'nbre_tacle_club2' => rand(1,3),
            'nbre_coup_franc_club1' => rand(1,3),
            'nbre_coup_franc_club2' => rand(1,3),
            'nbre_interception_club1' => rand(1,3),
            'nbre_interception_club2' => rand(1,3),
            'nbre_passe_reussie_club1' => rand(1,3),
            'nbre_passe_reussie_club2' => rand(1,3)
        ];
    }
}
