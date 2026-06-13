<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		DB::table("sections")->insert([	
			[
				"title" => "hero",
				"page_id" => 1,
				"section_data" => json_encode([
					"heading" => "REAL-TIME SPORTS DATA API",
					"title" => "Real-time sports data",
					"title_first" => "Real-time",
					"title_second" => "sports data",
					"subtitle" => "Power your app with live scores, standings, stats, and more. Built by developers, for developers.",
					"image" => "imge/file/image.png",
				]),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				"title" => "feature",
				"page_id" => 1,
				"section_data" => json_encode([
					"heading" => "EVERYTHING YOU NEED",
					"title" => "A complete platform for every use case",
					"subtitle" => "Powerful features and tools to help you build amazing sports experiences",
					"features" => [
						[
							"title" => "Live Scores",
							"description" => "Real-time scores, events and play-by-play updates",
							"icon" => "Activity"
						],
						[
							"title" => "Standings",
							"description" => "Up-to-date league tables and rankings",
							"icon" => "Trophy"
						],
						[
							"title" => "Odds & Betting",
							"description" => "Latest odds, markets and bookmaker data",
							"icon" => "BadgeDollarSign"
						],
						[
							"title" => "Statistics",
							"description" => "In-depth stats and performance metrics",
							"icon" => "BarChart3"
						],
						[
							"title" => "Fixtures",
							"description" => "Schedules, results and match information",
							"icon" => "CalendarDays"
						],
						[
							"title" => "Players & Teams",
							"description" => "Profiles, ratings and historical data",
							"icon" => "Users"
						]
					]
				]),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				"title" => "Widgets",
				"page_id" => 1,
				"section_data" => json_encode([
					"heading" => "EMBED. CUSTOMIZE. DELIVER.",
					"title" => "Widgets your users will love",
					"features" => [
							"Live scores & match details",
							"League tables & standings",
							"Player & team statistics",
							"Fully responsive & customizable",
						]
				]),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				"title" => "Developer section",
				"page_id" => 1,
				"section_data" => json_encode([
					"heading" => "BUILT FOR DEVELOPERS",
					"title" => "Simple to integrate. Powerful to scale.",
					"features" => [
						"RESTful API with JSON responses",
						"Real-time & historical data",
						"Easy authentication",
						"Comprehensive documentation",
					],

					"codes" => [
						[
							"id" => "javascript",
							"label" => "JavaScript",
							"active" => false,
							"code" => "const response = await fetch('https://api.api-sports.io/v3/fixtures/live', {\n  method: 'GET',\n  headers: {\n    'x-apisports-key': 'YOUR_API_KEY'\n  }\n});\n\nconst data = await response.json();\nconsole.log(data);"
						],
						[
							"id" => "curl",
							"label" => "cURL",
							"active" => true,
							"code" => "curl --request GET \\\n  --url https://api.api-sports.io/v3/fixtures/live \\\n  --header 'x-apisports-key: YOUR_API_KEY'"
						],
						[
							"id" => "python",
							"label" => "Python",
							"active" => false,
							"code" => "import requests\n\nurl = 'https://api.api-sports.io/v3/fixtures/live'\nheaders = {\n    'x-apisports-key': 'YOUR_API_KEY'\n}\n\nresponse = requests.get(url, headers=headers)\nprint(response.json())"
						],
						[
							"id" => "php",
							"label" => "PHP",
							"active" => false,
							"code" => "<?php\ncurl = curl_init();\n\ncurl_setopt_array(curl, [\n  CURLOPT_URL => 'https://api.api-sports.io/v3/fixtures/live',\n  CURLOPT_RETURNTRANSFER => true,\n  CURLOPT_HTTPHEADER => [\n    'x-apisports-key: YOUR_API_KEY'\n  ]\n]);"
						]
					]
				]),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				"title" => "Developer section",
				"page_id" => 1,
				"section_data" => json_encode([
					"heading" => "CONNECT & INTEGRATE",
					"title" => "Seamless integrations",
					"subtitle" => "Easily connect API-SPORTS with your favorite tools, frameworks and platforms.",
				]),
				'features' => json_encode([

				]),
				'created_at' => now(),
				'updated_at' => now(),
			],
		]);
	}
}
