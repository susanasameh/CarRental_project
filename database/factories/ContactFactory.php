<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'firstName'=>fake()->firstName(),
        'lastName'=>fake()->lastName(),
        'email'=>fake()->email(),
        'message'=>fake()->text(100),
        'unreadMessage'=>fake()->numberBetween(0,1),
        ];
    }
}
