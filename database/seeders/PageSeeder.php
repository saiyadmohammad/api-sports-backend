<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Page::factory()->has(Section::factory()->count(3), 'section')->create();
        DB::table("pages")->insert([
            'title' => 'Home Page',
            'slug' => 'home',
            'description' => fake()->paragraph(),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("pages")->insert([
            'title' => 'Cricket Page',
            'slug' => 'cricket',
            'description' => fake()->paragraph(),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("pages")->insert([
            'title' => 'Football Page',
            'slug' => 'football',
            'description' => fake()->paragraph(),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
