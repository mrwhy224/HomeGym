<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
	public function run(): void
	{
		Plan::updateOrCreate(
			['name' => 'Basic'], // شرط جستجو
			[
				'description' => 'Default basic plan for all users',
				'discount_type' => 'percentage',
				'discount_value' => 0.00,
				'is_default' => true,
			]
		);
	}
}
