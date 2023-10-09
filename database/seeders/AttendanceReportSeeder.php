<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Seeder;
use App\Models\AttendanceReport;


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
