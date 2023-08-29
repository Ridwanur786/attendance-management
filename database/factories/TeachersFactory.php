<?php

namespace Database\Factories;


use App\Models\Teachers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teachers>
 */
class TeachersFactory extends Factory
{

    protected $model = Teachers::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->name(),
            'email' =>fake()->unique()->safeEmail(),
            'role' =>fake()->randomElement([ 'teacher']),
            'password' => Hash::make('12345678'),
           

        ];
    }
}
