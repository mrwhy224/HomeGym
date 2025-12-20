<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$packages = [
			[
				'name' => ['en' => 'Public Drop-in', 'fa' => 'تک جلسه عمومی'],
				'type' => 'public',
				'total_sessions' => 1,
				'price' => 10.00,
				'capacity'=>10,
				'validity_days' => 7,
				'is_active' => true,
			],
			[
				'name' => ['en' => 'Bronze Public (8 Sessions)', 'fa' => 'عمومی برنزی (۸ جلسه)'],
				'type' => 'public',
				'total_sessions' => 8,
				'price' => 60.00,
				'capacity'=>10,
				'validity_days' => 30,
				'is_active' => true,
			],
			[
				'name' => ['en' => 'Silver Public (12 Sessions)', 'fa' => 'عمومی نقره‌ای (۱۲ جلسه)'],
				'type' => 'public',
				'total_sessions' => 12,
				'price' => 85.00,
				'capacity'=>10,
				'validity_days' => 35,
				'is_active' => true,
			],
			[
				'name' => ['en' => 'Semi-Private (12 Sessions)', 'fa' => 'نیمه‌خصوصی (۱۲ جلسه)'],
				'type' => 'semi_private',
				'total_sessions' => 12,
				'price' => 200.00,
				'capacity'=>3,
				'validity_days' => 40,
				'is_active' => true,
			],

			[
				'name' => ['en' => 'Private Single Session', 'fa' => 'تک جلسه خصوصی'],
				'type' => 'private',
				'total_sessions' => 1,
				'price' => 50.00,
				'capacity'=>1,
				'validity_days' => 10,
				'is_active' => true,
			],
			[
				'name' => ['en' => 'Private Gold (10 Sessions)', 'fa' => 'خصوصی طلایی (۱۰ جلسه)'],
				'type' => 'private',
				'total_sessions' => 10,
				'price' => 450.00,
				'capacity'=>1,
				'validity_days' => 60,
				'is_active' => true,
			],
			[
				'name' => ['en' => 'Private VIP (20 Sessions)', 'fa' => 'خصوصی VIP (۲۰ جلسه)'],
				'type' => 'private',
				'total_sessions' => 20,
				'price' => 800.00,
				'capacity'=>1,
				'validity_days' => 90,
				'is_active' => true,
			],
		];

		foreach ($packages as $pkg) {
			Package::updateOrCreate(
				[
					'name->en' => $pkg['name']['en'],
					'type' => $pkg['type']
				],
				$pkg
			);
		}
	}
}
