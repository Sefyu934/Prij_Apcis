<?php

namespace Database\Factories;

use App\Models\Jeune;
use Illuminate\Database\Eloquent\Factories\Factory;

class JeuneFactory extends Factory
{
    protected $model = Jeune::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'sexe' => $this->faker->randomElement(["homme", "femme"]),
            'date_naissance' => $this->faker->date,
            'ville' => $this->faker->city,
            'cp' => $this->faker->postcode,
            'qpv' => $this->faker->randomElement([0, 1]),
            'annee' => $this->faker->randomElement(["1er année", "2ème année"]),
            'statut' => $this->faker->randomElement(["positif", "négatif"])
        ];
    }
}
