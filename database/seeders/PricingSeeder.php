<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pricings = [	
			[
				"name" => "Free",
                "tag" => "Perfect for testing",
                "is_popular" => false,
                "price" => 0,
                "currency" => '$',
                "duration" => "month",
                "order" => 1,
                "is_active" => true,
				"features" => [
					"500 API requests / day",
                    "Basic endpoints",
                    "Community support"
				],
                "button_text" => "Get Started",
			],
            [
				"name" => "Pro",
                "tag" => "For growing apps",
                "is_popular" => false,
                "price" => 29,
                "currency" => '$',
                "duration" => "month",
                "order" => 2,
                "is_active" => true,
				"features" => [
					"10,000 API requests / day",
                    "All endpoints",
                    "Priority support"
				],
                "button_text" => "Get Started",
			],
            [
                "name" => "Business",
                "tag" => "For production use",
                "is_popular" => false,
                "price" => 79,
                "currency" => '$',
                "duration" => "month",
                "order" => 3,
                "is_active" => true,
				"features" => [
					"100,000 API requests / day",
                    "All endpoints & odds",
                    "24/7 support"
				],
                "button_text" => "Get Started",
            ]
        ];
        
        foreach($pricings as $pricing) {
            Pricing::create($pricing);
        }
    }
}
