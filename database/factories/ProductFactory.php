<?php

namespace Database\Factories;

use App\Models\Product;
use App\Helpers\SlugBuilder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    use SlugBuilder;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'slug' => $this->createSlug(Product::class, fake()->word()) . "-" . fake()->randomDigit(),
            'price' => fake()->numberBetween(100, 500),
            'short_detail' => fake()->sentence(6)
        ];
    }
}
