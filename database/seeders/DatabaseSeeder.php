<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\HomeWork;
use App\Models\Students;
use Illuminate\Database\Seeder;
use App\Models\AttendanceReport;
use Database\Seeders\HomeWorkSeeder;
use Database\Seeders\StudentsSeeder;
use Database\Seeders\TeachersSeeder;
use Database\Seeders\AttendanceReportSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            TeachersSeeder::class,
            StudentsSeeder::class,
            HomeWorkSeeder::class,
            AttendanceReportSeeder::class
        ]);
    }
}
