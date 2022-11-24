<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Discount;
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
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween($min = 500, $max = 4000),
            'category_id' => Category::all()->random()->id,
            'discount_id' => Discount::all()->random()->id,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'description' => $this->faker->paragraph(2),
            'gender' => $this->faker->randomElement($array = array ('Men','Woman','Kids')),
            'discount_id' => Discount::all()->random()->id,
        ];
    }
}

