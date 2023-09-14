<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'role' => 'student', // Assuming 'role' should always be 'student'
            'class' => $this->faker->randomElement(['play', 'classOne', 'classTwo', 'classThree', 'classFour', 'classFive', 'classSix']),
            'password' => Hash::make('12345678'),
           
               
           
        ];
    }
}
