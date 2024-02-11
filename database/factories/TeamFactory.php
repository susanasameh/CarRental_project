<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         //generates actual image into local server using faker provider
         $fakerFileName = $this->faker->image("public/assets/images", 100, 100);

        return [
            'name'=>fake()->name(),
            'position'=>fake()->jobTitle(),
            'description'=>fake()->text(),
            'image'=>basename($fakerFileName),
            'active'=>fake()->numberBetween(0, 1),
        ];
    }
}
