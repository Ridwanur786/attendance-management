<?php

namespace Database\Factories;

use App\Models\Students;
use App\Models\AttendanceReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AttendanceReport>
 */
class AttendanceReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'report_id' => AttendanceReport::inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(['late', 'in time', 'N/A']),
           
        ];
    }


    public function configure()
    {
        return $this->afterCreating(function (AttendanceReport $attendanceReport) {
            $student = Students::inRandomOrder()->first(); // Get a random student
            $attendanceReport->attendStudent()->associate($student); // Associate the student with the homework
            $attendanceReport->save();
        });
    }
}
