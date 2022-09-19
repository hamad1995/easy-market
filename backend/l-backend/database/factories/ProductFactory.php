<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        $categories = Category::pluck('id')->toArray();
        return [

                'name' => fake()->name(),
                'slug' => fake()->slug(),
                'image' => fake()->image(),
                'category_id'=>fake()->randomElement($categories),
                'price' => fake()->numberBetween(1,100),
                'description' => fake()->text(),

        ];
    }
}
