<?php

namespace Database\Factories;

use FakerRestaurant\Provider\es_PE\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meal>
 */
class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // fake()->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant(fake()));
        fake()->addProvider(new Restaurant(fake()));
        return [
            "name" => fake()->meatName()
        ];
    }
}