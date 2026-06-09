<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'page_id' => Page::factory(),
            'is_active' => true,
            'section_data' => [
                'background_color' => fake()->hexColor(),
                'text_color' => fake()->hexColor(),
            ],
        ];
    }
}
