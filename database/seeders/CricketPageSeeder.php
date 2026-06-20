<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class CricketPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $CricketPage = Page::create([
            'title' => 'Cricket Page',
            'slug' => 'cricket',
            'description' => fake()->paragraph(),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
        ]);

        
        $sections = [
            [
                "title" => "Cricket Hero",
                "type" => "hero_cricket",
                "order" => 1,
                "is_active" => true,
				"section_data" => [
					"heading" => "REAL-TIME CRICKET DATA API",
					"title" => "Power your app with live cricket data",
					"title_first" => "Power your app with live",
                    "title_middle" => "cricket",
					"title_last" => "data",
					"subtitle" => "Get live scores, fixtures, player stats, team rankings, ball-by-ball commentary and much more. Built for modern cricket applications.",
                    "image" => "assets/img/cricket2.png",
                    "key_metrics" => [
                        [
                            "id" => 1,
                            "title" => "100",
                            "subtitle" => "Tournaments",
                            "icon" => "FaTrophy",
                            "iconPackage" => "react-icons/fa",
                        ],
                        [
                            "id" => 2,
                            "title" => "250K",
                            "subtitle" => "Matches / Year",
                            "icon" => "FaCalendarAlt",
                            "iconPackage" => "react-icons/fa",
                        ],
                        [
                            "id" => 3,
                            "title" => "80ms",
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
                "title" => "Data Coverage Cricket",
                "type" => "data_coverage_cricket",
                "order" => 3,
                "is_active" => true,
				"section_data" => [
                    "heading" => "DATA COVERAGE",
                    "title" => "Extensive coverage you can rely on",
                    "subtitle" => "We cover 150+ leagues, cups and competitions from around the world with accurate and up-to-date data.",
                    "all_features" => [
                        [
                            "id" => 1,
                            "name" => "World Cup",
                            "country" => "International",
                            "img" => "assets/leagues/champions-league.png",
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
                            "name" => "IPL",
                            "country" => "India",
                            "img" => "assets/leagues/mls.png",
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
                            "name" => "Big Bash",
                            "country" => "Australia",
                            "img" => "assets/leagues/europa-league.png",
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
                            "name" => "PSL",
                            "country" => "Pakistan",
                            "img" => "assets/leagues/laliga.png",
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
                            "name" => "The Hundred",
                            "country" => "England",
                            "img" => "assets/leagues/fa-cup.png",
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
                            "name" => "Asia Cup",
                            "country" => "Asia",
                            "img" => "assets/leagues/serie-a.png",
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
				"type" => "developer_cricket",
				"order" => 4,
				"is_active" => true,
				"section_data" => [
					"heading" => "API ENDPOINTS",
					"title" => "Clean, simple and developer friendly",
                    "subtitle" => "Well structured RESTful API endpoints that return real-time JSON data.",
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
                            "title" => "Introducing New Cricket API Endpoints",
                            "subtitle" => "Explore our latest cricket API endpoints for live scores, commentary, and player statistics.",
                            "img" => "assets/blog-img/blog-img-1.png",
                            "date" => "May 10, 2024"
                        ],
                        [
                            "id" => "2",
                            "type" => "Guide",
                            "color" => "blue",
                            "title" => "How To Build A Live Cricket Score App",
                            "subtitle" => "Learn how to integrate real-time cricket scores into your web or mobile application.",
                            "img" => "assets/blog-img/blog-img-1.png",
                            "date" => "May 10, 2024"
                        ],
                        [
                            "id" => "3",
                            "type" => "Release",
                            "color" => "purple",
                            "title" => "Ball-by-Ball Commentary API Released",
                            "subtitle" => "Get detailed over-by-over and ball-by-ball cricket commentary with our new API release.",
                            "img" => "assets/blog-img/blog-img-1.png",
                            "date" => "May 10, 2024"
                        ]
                    ]
                ],
            ],
        ];


        foreach($sections as $section) {
            // $homePage->has(Section::create($section));
            $CricketPage->section()->create($section);
        }
    }
}
