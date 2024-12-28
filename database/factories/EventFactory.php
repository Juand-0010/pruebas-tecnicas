<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'fecha' => $this->faker->date(),
            'tipo_deporte' => $this->faker->randomElement(['Fútbol', 'Baloncesto', 'Tenis', 'Béisbol']),
        ];
    }
}
