<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $products = 
        [
            ['name' => "Tarcze hamulcowe", 'price' => 149.99],
            ['name' => "Klocki hamulcowe", 'price' => 89.99],
            ['name' => "Sprzęgło", 'price' => 499.99],
            ['name' => "Wachacz", 'price' => 199.99],
            ['name' => "Linka hamulcowa", 'price' => 49.99],
            ['name' => "Szampon do auta", 'price' => 19.99],
            ['name' => "Żarówki", 'price' => 9.99],
            ['name' => "Opony", 'price' => 999.99],
            ['name' => "Dywaniki", 'price' => 99.99],
        ];

        $product = $this->faker->randomElement($products);

        return [
            'name' => $product['name'],
            'description' => $this->faker->sentence(5),
            'price' => $product['price'],
        ];
    }
}
