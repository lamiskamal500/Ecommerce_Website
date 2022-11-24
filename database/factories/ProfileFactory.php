<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'address' => $this->faker->address(),
            'number' =>$this->faker->phoneNumber(),
            'about' =>$this->faker->paragraph(2),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}

