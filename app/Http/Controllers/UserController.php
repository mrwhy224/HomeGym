<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Language;
use App\Models\Plan;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
	public function updateAvatar(Request $request)
	{
		$user = auth()->user();
		if ($request->hasFile('avatar'))
			$user->addMediaFromRequest('avatar')->toMediaCollection('avatar');

		return back()->with('success', 'Profile picture updated!');
	}

	public function loginAttempt(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'email-username' => 'required|string',
			'password' => 'required|string',
		]);

		if ($validator->fails())
			return response()->error(422,  'Please fill in all required fields.', $validator->errors());


		$credentials = [
			'email' => $request->input('email-username'),
			'password' => $request->input('password')
		];

		$remember = $request->has('remember-me');

		if (Auth::attempt($credentials, $remember)) {
			$request->session()->regenerate();

			return response()->success('Login successful! Redirecting...', ['redirect_url' => url('/panel')]);
		}

		return response()->error(401, 'The provided credentials do not match our records.');
	}
	public function showLogin()
	{
		return view('content.login');
	}

	public function showRegister()
	{
		return view('content.register');
	}
	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect('/panel');
	}
	public function registerAttempt(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6',
			'terms' => 'accepted'
		]);

		if ($validator->fails()) {
			return response()->json([
				'ok' => false,
				'message' => $validator->errors()->first()
			]);
		}

		return DB::transaction(function () use ($request) {
			try {
				$planBasic = Plan::where('is_default', true)->first() ?? Plan::first();
				$countryIran = Country::where('code_alpha_2', 'USD')->first();
				$langFa = Language::where('code', 'en')->first();
				$irtCurrency = Currency::where('code', 'USD')->first() ?? Currency::first();
				$systemCurrency = Currency::where('is_default', true)->first() ?? Currency::first();

				$user = User::create([
					'first_name' => $request->name,
					'last_name' => 'Member',
					'email' => $request->email,
					'password' => Hash::make($request->password),
					'phone' => null,
					'email_verified_at' => now(),
					'country_id' => $countryIran?->id,
					'language_id' => $langFa?->id,
					'currency_id' => $irtCurrency->id,
					'timezone' => 'UTC',
				]);

				$user->assignRole('customer');

				Customer::create([
					'user_id' => $user->id,
					'plan_id' => $planBasic?->id,
					'gender' => 'not_specified',
					'date_of_birth' => '2000-01-01',
					'activity_level' => 'moderate',
					'fitness_goal' => 'General Health',
					'bio' => 'Newly registered user.',
				]);


				Wallet::create([
					'user_id' => $user->id,
					'currency_id' => $systemCurrency->id,
					'name' => 'Main Wallet',
					'holder_type' => 'user',
					'balance' => 0,
					'balance_blocked' => 0,
					'is_active' => true,
				]);

				Auth::login($user);

				return response()->json([
					'ok' => true,
					'message' => 'Account created successfully!',
					'data' => ['redirect_url' => url('/panel')]
				]);

			} catch (\Exception $e) {
				return response()->json([
					'ok' => false,
					'message' => 'Registration failed: ' . $e->getMessage()
				]);
			}
		});
	}
}
