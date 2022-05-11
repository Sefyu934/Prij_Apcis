<?php

namespace Database\Factories;

use App\Models\Jeune;
use App\Models\Rdv;
use Illuminate\Database\Eloquent\Factories\Factory;

class RdvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rdv::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date('Y-m-d'),
            'heure' => $this->faker->time('h:m:s'),
            'debut_heure' => $this->faker->dateTime($max = 'now', $timezone = null),
            'fin_heure' => $this->faker->dateTime($max = 'now', $timezone = null),
            'rapport' => $this->faker->text(100),
            'depot' => $this->faker->numberBetween('1', '500'),
            'intervenant' => $this->faker->name,
            'jeune_id' => Jeune::all()->random()->id
        ];
    }
}
