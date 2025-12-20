<?php

namespace Database\Seeders;

use App\Models\Coach;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Language;
use App\Models\Plan;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
	public function run(): void
	{
		// 1. دریافت داده‌های پایه
		$planBasic = Plan::where('is_default', true)->first() ?? Plan::first();

		$countryIran = Country::where('code_alpha_2', 'IR')->first();
		$countryUS = Country::where('code_alpha_2', 'US')->first();

		$langFa = Language::where('code', 'fa')->first();
		$langEn = Language::where('code', 'en')->first();

		// دریافت ارزهای پایه
		$usdCurrency = Currency::where('code', 'USD')->first(); // دلار
		$irtCurrency = Currency::where('code', 'IRT')->first(); // تومان (برای کاربر ایرانی)

		// اگر ارز خاصی پیدا نشد، از ارز پیش‌فرض سیستم استفاده کن
		$defaultSystemCurrency = Currency::where('is_default', true)->first() ?? Currency::first();
		$usdCurrency = $usdCurrency ?? $defaultSystemCurrency;
		$irtCurrency = $irtCurrency ?? $defaultSystemCurrency;

		$password = Hash::make('123456');

		// ==========================================
		// 2. ایجاد Super Admin
		// ==========================================
		$admin = User::updateOrCreate(
			['email' => 'admin@gym.local'],
			[
				'first_name' => 'Super',
				'last_name' => 'Admin',
				'phone' => '+12025550100',
				'email_verified_at' => now(),
				'password' => $password,
				'country_id' => $countryUS?->id,
				'language_id' => $langEn?->id,
				'currency_id' => $usdCurrency->id, // ادمین با دلار کار می‌کند
				'timezone' => 'UTC',
			]
		);
		$admin->assignRole('super_admin');

		// ==========================================
		// 3. ایجاد Coach (مربی نمونه)
		// ==========================================
		$coach = User::updateOrCreate(
			['email' => 'coach@gym.local'],
			[
				'first_name' => 'Alex',
				'last_name' => 'Trainer',
				'phone' => '+12025550101',
				'email_verified_at' => now(),
				'password' => $password,
				'country_id' => $countryUS?->id,
				'language_id' => $langEn?->id,
				'currency_id' => $usdCurrency->id, // مربی با دلار کار می‌کند
				'timezone' => 'America/New_York',
			]
		);
		$coach->assignRole('coach');

		// الف: ایجاد پروفایل مربی
		Coach::updateOrCreate(
			['user_id' => $coach->id],
			[
				'headline' => 'Senior Bodybuilding Specialist',
				'bio' => 'Certified trainer with over 10 years of experience in hypertrophy and strength training.',
				'specializations' => ['Bodybuilding', 'Nutrition', 'HIIT'],
				'experience_years' => 10,
				'social_links' => [
					'instagram' => 'https://instagram.com/alex_fit',
					'linkedin' => 'https://linkedin.com/in/alex-trainer'
				],
				'is_verified' => true,
				'commission_percentage' => 70.00,
				'bank_name' => 'Chase Bank',
				'iban' => 'US12345678901234567890',
				'card_number' => '4242424242424242',
				'account_holder_name' => 'Alex Trainer',
				'rating_average' => 4.8,
				'total_reviews' => 24,
			]
		);

		// ب: کیف پول مربی (موجودی به ارز پایه سیستم یعنی دلار نگهداری می‌شود)
		$this->createWallet($coach, $defaultSystemCurrency);


		// ==========================================
		// 4. ایجاد Customer (مشتری نمونه ایرانی)
		// ==========================================
		$customerUser = User::updateOrCreate(
			['email' => 'user@gym.local'],
			[
				'first_name' => 'Ali',
				'last_name' => 'Ahmadi',
				'phone' => '+989120000000',
				'email_verified_at' => now(),
				'password' => $password,
				'country_id' => $countryIran?->id,
				'language_id' => $langFa?->id,
				'currency_id' => $irtCurrency->id, // کاربر ایرانی تومان می‌بیند
				'timezone' => 'Asia/Tehran',
			]
		);
		$customerUser->assignRole('customer');

		// الف: پروفایل مشتری
		Customer::updateOrCreate(
			['user_id' => $customerUser->id],
			[
				'plan_id' => $planBasic?->id,
				'gender' => 'male',
				'date_of_birth' => '1995-05-15',
				'activity_level' => 'moderate',
				'fitness_goal' => 'Build Muscle & Fat Loss',
				'bio' => 'علاقمند به بدنسازی و فیتنس، کارمند اداری هستم.',
				'medical_conditions' => 'None',
				'dietary_restrictions' => 'No sugar',
			]
		);

		// ب: کیف پول مشتری (موجودی به ارز پایه سیستم نگهداری می‌شود)
		$this->createWallet($customerUser, $defaultSystemCurrency);


		// ==========================================
		// 5. ایجاد مشتریان تصادفی
		// ==========================================
		// برای مشتریان رندوم هم از واحد پول تومان استفاده می‌کنیم
		$this->createRandomCustomers(5, $password, $planBasic, $countryIran, $langFa, $irtCurrency, $defaultSystemCurrency);
	}

	/**
	 * تابع کمکی برای ایجاد مشتریان تصادفی
	 */
	private function createRandomCustomers($count, $password, $plan, $country, $lang, $userCurrency, $walletCurrency)
	{
		for ($i = 1; $i <= $count; $i++) {
			$user = User::create([
				'first_name' => 'User' . $i,
				'last_name' => 'Test',
				'email' => "test{$i}@gym.local",
				'phone' => "+98912000000{$i}",
				'email_verified_at' => now(),
				'password' => $password,
				'country_id' => $country?->id,
				'language_id' => $lang?->id,
				'currency_id' => $userCurrency->id, // تنظیم واحد پول کاربر
				'timezone' => 'Asia/Tehran',
			]);

			$user->assignRole('customer');

			Customer::create([
				'user_id' => $user->id,
				'plan_id' => $plan?->id,
				'gender' => $i % 2 == 0 ? 'female' : 'male',
				'date_of_birth' => now()->subYears(rand(18, 40)),
				'activity_level' => ['sedentary', 'light', 'active'][rand(0, 2)],
				'fitness_goal' => 'General Health',
				'bio' => 'کاربر آزمایشی شماره ' . $i,
			]);

			// کیف پول
			$this->createWallet($user, $walletCurrency);
		}
	}

	/**
	 * تابع کمکی برای ساخت کیف پول
	 * نکته: کیف پول همیشه با ارز پایه سیستم (مثلاً دلار) ساخته می‌شود
	 */
	private function createWallet($user, $currency)
	{
		if (!$currency) return;

		Wallet::firstOrCreate(
			['user_id' => $user->id],
			[
				'currency_id' => $currency->id, // ارز پایه سیستم
				'name' => 'Main Wallet',
				'holder_type' => 'user',
				'balance' => rand(10, 1000) * 10,
				'balance_blocked' => 0,
				'is_active' => true,
			]
		);
	}
}
