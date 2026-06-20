<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Page::factory()->has(Section::factory()->count(3), 'section')->create();
        $homePage = Page::create([
            'title' => 'Home Page',
            'slug' => 'home',
            'description' => fake()->paragraph(),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
        ]);

        $sections = [	
			[
				"title" => "Homepage Hero",
                "type" => "hero_home",
                "order" => 1,
                "is_active" => true,
				"section_data" => [
					"heading" => "REAL-TIME SPORTS DATA API",
					"title" => "Real-time sports data",
					"title_first" => "Real-time",
					"title_second" => "sports data",
					"subtitle" => "Power your app with live scores, standings, stats, and more. Built by developers, for developers.",
					"image" => "assets/sports-api-hero.png",
				],
			],
			[
				"title" => "feature",
				"type" => "feature",
				"order" => 2,
				"is_active" => true,
				"section_data" =>[
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
				],
			],
			[
				"title" => "Widgets",
				"type" => "widget",
				"order" => 3,
				"is_active" => true,
				"section_data" => [
					"heading" => "EMBED. CUSTOMIZE. DELIVER.",
					"title" => "Widgets your users will love",
					"features" => [
							"Live scores & match details",
							"League tables & standings",
							"Player & team statistics",
							"Fully responsive & customizable",
						]
				],
			],
            [
                "title" => "All Sports",
				"type" => "sports",
				"order" => 3,
				"is_active" => true,
				"section_data" => [
                    "heading" => "EMBED. CUSTOMIZE. DELIVER.",
                    "sports" => [
                        [
                            "id" => 1,
                            "name" => "Football",
                            "slug" => "football",
                            "icon" => "Goal",
                        ],
                        [
                            "id" => 3,
                            "name" => "Tennis",
                            "slug" => "tennis",
                            "icon" => "CircleDot",
                        ],
                        [
                            "id" => 4,
                            "name" => "Baseball",
                            "slug" => "baseball",
                            "icon" => "Circle",
                        ],
                        [
                            "id" => 5,
                            "name" => "Hockey",
                            "slug" => "hockey",
                            "icon" => "Shield",
                        ],
                        [
                            "id" => 6,
                            "name" => "NFL",
                            "slug" => "nfl",
                            "icon" => "Trophy",
                        ],
                        [
                            "id" => 7,
                            "name" => "eSports",
                            "slug" => "esports",
                            "icon" => "Gamepad2",
                        ],
                        [
                            "id" => 8,
                            "name" => "Rugby",
                            "slug" => "rugby",
                            "icon" => "Bean",
                        ],
                        [
                            "id" => 9,
                            "name" => "MMA",
                            "slug" => "mma",
                            "icon" => "Dumbbell",
                        ],
                        [
                            "id" => 10,
                            "name" => "Motorsport",
                            "slug" => "motorsport",
                            "icon" => "Car",
                        ],
                        [
                            "id" => 11,
                            "name" => "Volleyball",
                            "slug" => "volleyball",
                            "icon" => "Orbit",
                        ],
                        [
                            "id" => 12,
                            "name" => "More",
                            "slug" => "more",
                            "icon" => "Grid2x2",
                        ],
                    ],
                ],
            ],
			[
				"title" => "Developer section",
				"type" => "developer_home",
				"order" => 4,
				"is_active" => true,
				"section_data" => [
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
				],
			],
			[
				"title" => "Seamless integrations section",
				"type" => "seamless_integrations",
				"order" => 5,
				"is_active" => true,
				"section_data" => [
					"heading" => "CONNECT & INTEGRATE",
					"title" => "Seamless integrations",
					"subtitle" => "Easily connect API-SPORTS with your favorite tools, frameworks and platforms.",
                    "tech_icons" => [
                        [
                            "id" => "1",
                            "name" => "Next.js",
                            "img" => "assets/techstack/nextjs.svg",
                        ],
                        [
                            "id" => "2",
                            "name" => "Tailwind CSS",
                            "img"=> "assets/techstack/tailwind.svg",
                        ],
                        [
                            "id" => "3",
                            "name" => "Sass",
                            "img"=> "assets/techstack/scss.svg", 
                        ],
                        [
                            "id" => "4",
                            "name" => "React",
                            "img"=> "assets/techstack/react.svg", 
                        ],
                        [
                            "id" => "5",
                            "name" => "MongoDB",
                            "img"=> "assets/techstack/mongodb.svg", 
                        ],
                        [
                            "id" => "6",
                            "name" => "Laravel",
                            "img"=> "assets/techstack/laravel.svg",
                        ],
                        [
                            "id" => "7",
                            "name" => "MySQL",
                            "img"=> "assets/techstack/mysql.svg",
                        ],
                        [
                            "id" => "8",
                            "name" => "Redis",
                            "img"=> "assets/techstack/redis.svg",
                        ],
                    ]
				],
			],
            [
                "title"=> "Why Developers Choose API-SPORTS",
                "type" => "why_choose",
                "order" => 6,
                "is_active" => true,
                "section_data" => [
                    "heading" => "WHY DEVELOPERS CHOOSE API-SPORTS",
                    "title" => "",
                    "subtitle" => "",
                    "features" => [
                        [   
                            "id"=> "1",
                            "title" => "Easy to start",
                            "description" => "Get your API key and start making requests in minutes.",
                            "img" => "assets/img/shuttle.png"
                        ],
                        [
                            "id"=> "2",
                            "title" => "Reliable & Scalable",
                            "description" => "Built on robust infrastructure with 99.9% uptime.",
                            "img" => "assets/img/scalability.png"
                        ],
                        [
                            "id"=> "3",
                            "title" => "Developer Support",
                            "description" => "Fast, friendly support when you need it.",
                            "img" => "assets/img/customer-support.png"
                        ],
                    ]
                ]
            ],
            [
                "title"=> "Blogs",
                "type" => "blogs",
                "order" => 7,
                "is_active" => true,
                "section_data" => [
                    "heading" => "FROM OUR BLOG",
                    "title"=> "Latest articles & resources",
                    "subtitle" => "Tips, updates and guides to help you build better with our API.",
                    "blogs" => [
                        [
                            "id" => "1",
                            "type" => "Update",
                            "color" => "green",
                            "title" => "Introductin New basketball API Endpoints",
                            "subtitle" => "Introductin New basketball API Endpoints",
                            "img" => "assets/blog-img/blog-1.png",
                            "date" => "May 10, 2024"
                        ],
                        [
                            "id" => "2",
                            "type" => "Update",
                            "color" => "green",
                            "title" => "Introductin New basketball API Endpoints",
                            "subtitle" => "Introductin New basketball API Endpoints",
                            "img" => "assets/blog-img/blog-1.png",
                            "date" => "May 10, 2024"
                        ],
                        [
                            "id" => "3",
                            "type" => "Update",
                            "color" => "green",
                            "title" => "Introductin New basketball API Endpoints",
                            "subtitle" => "Introductin New basketball API Endpoints",
                            "img" => "assets/blog-img/blog-1.png",
                            "date" => "May 10, 2024"
                        ]
                    ]
                ]
            ],
            [
                "title"=> "Call To Action",
                "type" => "cta_section",
                "order" => 8,
                "is_active" => true,
                "section_data" => [
                    "heading" => "READY TO BUILD?",
                    "title"=> "Start building for free",
                    "subtitle" => "Join thousands of developers building amazing sports apps.",
                    "image" => "assets/blog-img/blog-1.png",
                ]
            ],
		];

        foreach($sections as $section) {
            // $homePage->has(Section::create($section));
            $homePage->section()->create($section);
        }
    }
}
