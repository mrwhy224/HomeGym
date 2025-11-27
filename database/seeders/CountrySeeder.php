<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
	public function run(): void
	{
		$usd = Currency::where('code', 'USD')->first()->id ?? null;
		$omr = Currency::where('code', 'OMR')->first()->id ?? null;
		$irt = Currency::where('code', 'IRT')->first()->id ?? null;

		$en = Language::where('code', 'en')->first()->id ?? null;
		$fa = Language::where('code', 'fa')->first()->id ?? null;
		$ar = Language::where('code', 'ar')->first()->id ?? null;

		$countries = [
			[
				'name' => 'United States',
				'code_alpha_2' => 'US',
				'code_alpha_3' => 'USA',
				'dialing_code' => '1',
				'default_language_id' => $en,
				'default_currency_id' => $usd,
				'default_timezone' => 'America/New_York',
			],
			[
				'name' => 'Iran',
				'code_alpha_2' => 'IR',
				'code_alpha_3' => 'IRN',
				'dialing_code' => '98',
				'default_language_id' => $fa,
				'default_currency_id' => $irt,
				'default_timezone' => 'Asia/Tehran',
			],
			[
				'name' => 'Oman',
				'code_alpha_2' => 'OM',
				'code_alpha_3' => 'OMN',
				'dialing_code' => '968',
				'default_language_id' => $ar,
				'default_currency_id' => $omr,
				'default_timezone' => 'Asia/Muscat',
			],
			[
				'name' => 'United Kingdom',
				'code_alpha_2' => 'GB',
				'code_alpha_3' => 'GBR',
				'dialing_code' => '44',
				'default_language_id' => $en,
				'default_currency_id' => null,
				'default_timezone' => 'Europe/London',
			],
			[
				'name' => 'Germany',
				'code_alpha_2' => 'DE',
				'code_alpha_3' => 'DEU',
				'dialing_code' => '49',
				'default_language_id' => null,
				'default_currency_id' => null,
				'default_timezone' => 'Europe/Berlin',
			],
			[
				'name' => 'Canada',
				'code_alpha_2' => 'CA',
				'code_alpha_3' => 'CAN',
				'dialing_code' => '1',
				'default_language_id' => $en,
				'default_currency_id' => null,
				'default_timezone' => 'America/Toronto',
			],
		];

		foreach ($countries as $country) {
			Country::updateOrCreate(['code_alpha_2' => $country['code_alpha_2']], $country);
		}
	}
}
