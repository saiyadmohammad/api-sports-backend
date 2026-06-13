<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          [
            'title' => fake()->title(),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'title' => fake()->title(),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
          ]
        ];
    }
}
