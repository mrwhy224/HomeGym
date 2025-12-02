<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
	public function run(): void
	{
		$languages = [
			[
				'name' => 'English',
				'code' => 'en',
				'direction' => 'ltr',
				'is_default' => true,
			],
			[
				'name' => 'Persian',
				'code' => 'fa',
				'direction' => 'rtl',
				'is_default' => false,
			],
			[
				'name' => 'Arabic',
				'code' => 'ar',
				'direction' => 'rtl',
				'is_default' => false,
			],
		];

		foreach ($languages as $language) {
			Language::updateOrCreate(['code' => $language['code']], $language);
		}
	}
}
