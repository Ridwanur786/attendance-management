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
            'attendance' => [
                'classOne' => $this->faker->randomElement(['present', 'absent']),
                'classTwo' => $this->faker->randomElement(['present', 'absent']),
                'classThree' => $this->faker->randomElement(['present', 'absent']),
                'classFour' => $this->faker->randomElement(['present', 'absent']),
                'classFive' => $this->faker->randomElement(['present', 'absent']),
                'classSix' => $this->faker->randomElement(['present', 'absent']),
                // ... Define attendance status for other classes
            ],
        ];
    }
}
