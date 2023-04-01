<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $clientTypes = ['individual','company'];
        $clientType = $this->faker->randomElement($clientTypes);

        return [
            'client_type' => $clientType ,
            'company_name' => $clientType == 'company' ? $this->faker->company() : null,
            'nip' => $clientType == 'company' ? $this->faker->regexify('[0-9]{10}') : null,
            'first_name' => $clientType == 'individual' ? $this->faker->firstName(): null,
            'last_name' => $clientType == 'individual' ? $this->faker->lastName() : null,
            'phone' =>  $this->faker->phoneNumber(),
            'email' =>  $this->faker->safeEmail(),
            'address' =>  $this->faker->address(),
        ]; 
    }
}
