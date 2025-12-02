<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
	public function run(): void
	{
		$currencies = [
			[
				'name' => 'US Dollar',
				'code' => 'USD',
				'symbol' => '$',
				'exchange_rate' => 1.000000000,
				'precision' => 2,
				'is_default' => true,
			],
			[
				'name' => 'Omani Rial',
				'code' => 'OMR',
				'symbol' => 'OMR',
				'exchange_rate' => 0.385000000,
				'precision' => 3,
				'is_default' => false,
			],
			[
				'name' => 'Iranian Toman',
				'code' => 'IRT',
				'symbol' => 'IRT',
				'exchange_rate' => 110000.000000000,
				'precision' => 0,
				'is_default' => false,
			],
		];

		foreach ($currencies as $currency) {
			Currency::updateOrCreate(['code' => $currency['code']], $currency);
		}
	}
}
