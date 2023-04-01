<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory()->hasEmployee()->count(1)->create();
        Client::factory()->hasProducts(5)->count(1)->create();
        Client::factory()->hasProducts(4)->count(2)->create();
        Client::factory()->hasProducts(3)->count(3)->create();
        Client::factory()->hasProducts(2)->count(4)->create();
        Client::factory()->hasProducts(1)->count(5)->create();
    }
}
