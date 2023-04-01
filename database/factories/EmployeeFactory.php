<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' =>  $this->faker->phoneNumber(),
            'last_name' =>  $this->faker->safeEmail(),
            'address' =>  $this->faker->address(),
            'phone' =>  $this->faker->phoneNumber(),
            'email' =>  $this->faker->safeEmail(),
            'address' =>  $this->faker->address(),
        ];
    }
}
