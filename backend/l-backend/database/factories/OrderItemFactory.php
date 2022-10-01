<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {        $orders =Order::pluck('id')->toArray();
             $products =Product::pluck('id')->toArray();

        return [
            'order_id' => fake()->randomElement($orders),
            'product_id' => fake()->randomElement($products),
            'quantity' => fake()->numberBetween(1,10),

        ];
    }
}
