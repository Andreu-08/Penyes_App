<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crew>
 */
class CrewFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company, // Nombre de equipo aleatorio
            'color' => $this->faker->safeColorName, // Color seguro como "red", "blue"
            'slogan' => $this->faker->catchPhrase, // Frase publicitaria
            'capacity' => $this->faker->numberBetween(5, 20), // Capacidad entre 5 y 20
            'foundation' => $this->faker->date('Y-m-d', 'now'), // Fecha aleatoria hasta hoy
        ];
    }
}
