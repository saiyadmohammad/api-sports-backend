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
        $setting = Page::create([
            'title' => 'Setting',
            'slug' => 'setting',
            'logo' => '/assets/logo-light.png',
        ]);
    }
}
