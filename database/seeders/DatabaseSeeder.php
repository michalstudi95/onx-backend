<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductSeeder::class,
            CarSeeder::class,
            EmployeeSeeder::class,
            ClientSeeder::class
        ]);


        //relationship client-products
        for($i=1; $i <= 200; $i++) {
            $client = rand(1,35);
            DB::update('update products set client_id = ? where id = ?',[$client,$i]);
        }

        //relationship employee-clients
        DB::update('update clients set employee_id = ? where id = ?',[1,1]);
        DB::update('update clients set employee_id = ? where id = ?',[2,2]);
        DB::update('update clients set employee_id = ? where id = ?',[3,3]);
        DB::update('update clients set employee_id = ? where id = ?',[4,4]);
        DB::update('update clients set employee_id = ? where id = ?',[5,5]);
        DB::update('update clients set employee_id = ? where id = ?',[7,6]);
        DB::update('update clients set employee_id = ? where id = ?',[9,7]);
        DB::update('update clients set employee_id = ? where id = ?',[10,8]);
        DB::update('update clients set employee_id = ? where id = ?',[10,9]);
        DB::update('update clients set employee_id = ? where id = ?',[13,10]);
        DB::update('update clients set employee_id = ? where id = ?',[15,11]);
        DB::update('update clients set employee_id = ? where id = ?',[17,12]);
        DB::update('update clients set employee_id = ? where id = ?',[18,13]);
        DB::update('update clients set employee_id = ? where id = ?',[20,14]);
        DB::update('update clients set employee_id = ? where id = ?',[3,15]);
        DB::update('update clients set employee_id = ? where id = ?',[3,16]);
        DB::update('update clients set employee_id = ? where id = ?',[12,17]);
        DB::update('update clients set employee_id = ? where id = ?',[2,18]);
        DB::update('update clients set employee_id = ? where id = ?',[3,19]);
        DB::update('update clients set employee_id = ? where id = ?',[3,20]);
        DB::update('update clients set employee_id = ? where id = ?',[3,30]);
        DB::update('update clients set employee_id = ? where id = ?',[5,31]);
        DB::update('update clients set employee_id = ? where id = ?',[3,32]);
        DB::update('update clients set employee_id = ? where id = ?',[6,33]);
        DB::update('update clients set employee_id = ? where id = ?',[14,34]);
        DB::update('update clients set employee_id = ? where id = ?',[20,35]);
       

    }
}
