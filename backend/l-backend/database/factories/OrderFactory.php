<?php

namespace Database\Factories;

use App\Models\Order_items;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users =User::pluck('id')->toArray();

        return [

            'user_id' => fake()->randomElement($users),
            'status' => fake()->randomElement(['done','shipping','preparing']),

        ];
    }
}
