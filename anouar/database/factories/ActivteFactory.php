<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activte>
 */
class ActivteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description'=>$this->faker->sentence(4),
            'date_debut'=>$this->faker->date(),
            'nombre_jours'=>$this->faker->numberBetween(5,10),
        ];
    }
}
