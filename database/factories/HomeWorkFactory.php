<?php

namespace Database\Factories;

use App\Models\HomeWork;
use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeWork>
 */
class HomeWorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id' => Students::inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(['pending', 'approved', 'N/A']),
           
        ];
    }

    // Use the afterCreating method to associate homework with a student
    public function configure()
    {
        return $this->afterCreating(function (HomeWork $homeWork) {
            $student = Students::inRandomOrder()->first(); // Get a random student
            $homeWork->student()->associate($student); // Associate the student with the homework
            $homeWork->save();
        });
    }
}
