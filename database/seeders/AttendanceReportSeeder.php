<?php

namespace Database\Seeders;

use App\Models\AttendanceReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttendanceReport::factory(30)->create();
    }
}
