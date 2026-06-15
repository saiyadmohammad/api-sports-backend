<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class FootballPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $FootballPage = Page::create([
            'title' => 'Football Page',
            'slug' => 'football',
            'description' => fake()->paragraph(),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
        ]);

        
        $sections = [
            [
                "title" => "Hero",
                "type" => "hero",
                "order" => 1,
                "is_active" => true,
				"section_data" => [
					"heading" => "REAL-TIME FOOTBALL DATA API",
					"title" => "Power your app with real-time football data",
					"title_first" => "Power your app with real-time",
                    "title_middle" => "football",
					"title_last" => "data",
					"subtitle" => "Get live scores, fixtures, standings, players, teams and much more. Trusted by developers worldwide.",
                    "image" => "/assets/img/football.png",
                    "key_metrics" => [
                        [
                            "id" => 1,
                            "title" => "150+",
                            "subtitle" => "Leagues",
                            "icon" => "FaTrophy",
                            "iconPackage" => "react-icons/fa",
                        ],
                        [
                            "id" => 2,
                            "title" => "500K+",
                            "subtitle" => "Matches / Month",
                            "icon" => "FaCalendarAlt",
                            "iconPackage" => "react-icons/fa",
                        ],
                        [
                            "id" => 3,
                            "title" => "100ms",
                            "subtitle" => "Avg. Response",
                            "icon" => "FaClock",
                            "iconPackage" => "react-icons/fa",
                        ],
                        [
                            "id" => 4,
                            "title" => "99.9%",
                            "subtitle" => "Uptime",
                            "icon" => "FaUsers",
                            "iconPackage" => "react-icons/fa",
                        ],
                        [
                            "id" => 5,
                            "title" => "RESTful",
                            "subtitle" => "API",
                            "icon" => "FaCode",
                            "iconPackage" => "react-icons/fa",
                        ],
                    ],
				],
            ],
            [
                "title" => "Competitions",
                "type" => "competitions",
                "order" => 2,
                "is_active" => true,
				"section_data" => [
                    "all_features" => [
                        [
                            "id" => 1,
                            "name" => "Champions League",
                            "country" => "Europe",
                            "img" => "/assets/leagues/champions-league.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                        [
                            "id" => 2,
                            "name" => "Europa League",
                            "country" => "Europe",
                            "img" => "/assets/leagues/europa-league.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                        [
                            "id" => 3,
                            "name" => "FA Cup",
                            "country" => "England",
                            "img" => "/assets/leagues/fa-cup.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                        [
                            "id" => 4,
                            "name" => "La Liga",
                            "country" => "Spain",
                            "img" => "/assets/leagues/laliga.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                        [
                            "id" => 5,
                            "name" => "MLS",
                            "country" => "USA",
                            "img" => "/assets/leagues/mls.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                        [
                            "id" => 6,
                            "name" => "Premier League",
                            "country" => "England",
                            "img" => "/assets/leagues/premier-league.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                    ],
                ],
            ],
            [
                "title" => "Data Coverage",
                "type" => "data_coverage",
                "order" => 3,
                "is_active" => true,
				"section_data" => [
                    "heading" => "DATA COVERAGE",
                    "title" => "Extensive coverage you can rely on",
                    "subtitle" => "We cover 150+ leagues, cups and competitions from around the world with accurate and up-to-date data.",
                    "all_features" => [
                        [
                            "id" => 1,
                            "name" => "Champions League",
                            "country" => "Europe",
                            "img" => "/assets/leagues/champions-league.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                        [
                            "id" => 2,
                            "name" => "Europa League",
                            "country" => "Europe",
                            "img" => "/assets/leagues/europa-league.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                        [
                            "id" => 3,
                            "name" => "FA Cup",
                            "country" => "England",
                            "img" => "/assets/leagues/fa-cup.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                        [
                            "id" => 4,
                            "name" => "La Liga",
                            "country" => "Spain",
                            "img" => "/assets/leagues/laliga.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                        [
                            "id" => 5,
                            "name" => "MLS",
                            "country" => "USA",
                            "img" => "/assets/leagues/mls.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                        [
                            "id" => 6,
                            "name" => "Premier League",
                            "country" => "England",
                            "img" => "/assets/leagues/premier-league.png",
                            "features" => [
                                "live" => true,
                                "fixtures" => true,
                                "results" => true,
                                "standings" => true,
                                "players" => true,
                                "teams" => true,
                            ],
                        ],
                    ],
                ],
            ],
            [
				"title" => "Developer section",
				"type" => "developer",
				"order" => 4,
				"is_active" => true,
				"section_data" => [
					"heading" => "API ENDPOINTS",
					"title" => "Clean, simple and developer friendly",
                    "subtitle" => "Well structured RESTful API endpoints that return real-time JSON data.",
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
				],
			],
            [
                "title" => "Pricing",
                "type" => "pricing",
                "order" => 4,
                "is_active" => true,
				"section_data" => [
                    "heading" => "PRICING",
					"title" => "Simple pricing for every stage",
                    "subtitle" => "All plans include 99.9% uptime, real-time data and developer support.",
                    "pricing_plans" => [
                        [
                            "id" => 1,
                            "name" => "Free",
                            "description" => "Perfect for testing",
                            "price" => 0,
                            "currency" => "$",
                            "billing" => "/month",
                            "badge" => null,
                            "features" => [
                                "500 API requests / day",
                                "Basic endpoints",
                                "Community support",
                            ],
                            "buttonText" => "Get Started",
                            "popular" => false,
                        ],
                        [
                            "id" => 2,
                            "name" => "Pro",
                            "description" => "For growing apps",
                            "price" => 29,
                            "currency" => "$",
                            "billing" => "/month",
                            "badge" => "Popular",
                            "features" => [
                                "10,000 API requests / day",
                                "All endpoints",
                                "Priority support",
                            ],
                            "buttonText" => "Get Started",
                            "popular" => true,
                        ],
                        [
                            "id" => 3,
                            "name" => "Business",
                            "description" => "For production use",
                            "price" => 79,
                            "currency" => "$",
                            "billing" => "/month",
                            "badge" => null,
                            "features" => [
                                "100,000 API requests / day",
                                "All endpoints & odds",
                                "24/7 support",
                            ],
                            "buttonText" => "Get Started",
                            "popular" => false,
                        ],
                    ],
                ],
            ],
            [
                "title" => "Blogs",
                "type" => "blogs",
                "order" => 5,
                "is_active" => true,
				"section_data" => [
                    "heading" => "FROM OUR BLOG",
					"title" => "Latest news & insights",
                    "subtitle" => "Tips, updates and guides to help you build better with our API.",
                    "blogs" => [
                        [
                            "id" => "1",
                            "type" => "Update",
                            "color" => "green",
                            "title" => "Introductin New basketball API Endpoints",
                            "subtitle" => "Introductin New basketball API Endpoints",
                            "img" => "/assets/blog-img/blog-img-1.png",
                            "date" => "May 10, 2024"
                        ],
                        [
                            "id" => "2",
                            "type" => "Update",
                            "color" => "green",
                            "title" => "Introductin New basketball API Endpoints",
                            "subtitle" => "Introductin New basketball API Endpoints",
                            "img" => "/assets/blog-img/blog-img-1.png",
                            "date" => "May 10, 2024"
                        ],
                        [
                            "id" => "3",
                            "type" => "Update",
                            "color" => "green",
                            "title" => "Introductin New basketball API Endpoints",
                            "subtitle" => "Introductin New basketball API Endpoints",
                            "img" => "/assets/blog-img/blog-img-1.png",
                            "date" => "May 10, 2024"
                        ]
                    ]
                ],
            ],
          
        ];


        foreach($sections as $section) {
            // $homePage->has(Section::create($section));
            $FootballPage->section()->create($section);
        }
    }
}
