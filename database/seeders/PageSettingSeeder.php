<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class PageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Page::factory()->has(Section::factory()->count(3), 'section')->create();
        // Page::create([
        //     'title' => 'Setting',
        //     'slug' => 'setting',
        //     'logo' => '/assets/logo-light.png',
        // ]);

        $settingPage = Page::create([
            'title' => 'Setting',
            'slug' => 'setting',
            'description' => fake()->paragraph(),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
        ]);


        $sections = [	
			[
				"title" => "Navbar",
                "type" => "setting",
                "order" => 1,
                "is_active" => true,
				"section_data" => [
					'nav_logo' => '/assets/logo-light.png',
				],
			],
        ];
        
        foreach($sections as $section) {
            $settingPage->section()->create($section);
        }
    }
}
