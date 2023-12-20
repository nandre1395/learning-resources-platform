<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.

     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'category-id' => Category::factory(),
            'link' => $this->faker->url,
            'description' => $this->faker->paragraph,
            'category_id' => User::factory(),
        ];
    }
}
