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
        return [
            'category_id' => rand(1,4),
            'name' => [
                "uz" => fake() -> sentence(3),
                "en" => 'en word'
            ],
            'price' => rand(5000,100000),
            'description' => [
                "uz" => fake()->paragraph(5),
                "en" => 'en lorem ipsum'
            ]
        ];
    }
}
