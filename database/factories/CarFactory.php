<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        $fakerFileName = $this->faker->image("public/assets/images", 400, 400);

        return [
            'image' => basename($fakerFileName),
            'title' => fake()->name(),
            'price'=> fake()->randomDigit(),
            'active'=> fake()->numberBetween(0, 1),           
            'content'=>fake()->text(),
            'luggage'=> fake()->randomDigit(),
            'doors'=> fake()->numberBetween(2, 4),
            'passengers'=>fake()->numberBetween(4, 8),
            'category_id'=> fake()->numberBetween(1, 10),

        ];
    }
}
