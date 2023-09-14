<?php

namespace Database\Seeders;


use App\Models\Teachers;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teachers::factory(10)->create();
    }
}
