<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'address' => fake()->streetAddress(),
            'age' => fake()->numberBetween(10,55),
            'phone'=>fake()->phoneNumber(),
            'permanent_medications' => fake()->text(15),
        ];
    }
}
