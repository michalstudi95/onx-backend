<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Client;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::factory()->hasCar()->count(5)->create();
    }
}
