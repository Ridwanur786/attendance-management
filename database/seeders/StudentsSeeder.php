<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Students::factory(30)->create();

        // foreach ($students as $student) {
        //     var_dump($student->toArray()); // Dump the student data to inspect
        // }
        
        // Students::insert($students->toArray());
    }
}
