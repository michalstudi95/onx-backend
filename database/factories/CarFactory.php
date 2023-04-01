<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $cars = [
            ['make' => 'Peugeot', 'model' => 'Partner'],
            ['make' => 'Citroen', 'model' => 'Berlingo'],
            ['make' => 'Volkswagen', 'model' => 'Transporter'],
            ['make' => 'Fiat', 'model' => 'Ducato'],
            ['make' => 'Renault', 'model' => 'Master'],
            ['make' => 'Ford', 'model' => 'Transit'],
            ['make' => 'Volkswagen', 'model' => 'Caddy'],
            ['make' => 'Citroen', 'model' => 'Jumper'],
            ['make' => 'Renault', 'model' => 'Kangoo'],
            ['make' => 'Dacia', 'model' => 'Dokker'],
        ];

        $car = $this->faker->randomElement($cars);

        return [
            'registration' => $this->faker->regexify('[A-Z]{3}-[0-9]{5}'),
            'make' => $car['make'],
            'model' => $car['model'],
            'year' => rand(2005,2020),
        ];
    }
}
