<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeUserMail;
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
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
	public function uploadAvatar(Request $request)
	{
		$request->validate(['avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:800']);
		$user = auth()->user();
		if ($request->hasFile('avatar')) {
			$user->clearMediaCollection('avatar');
			$user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
			return response()->json(['success' => true, 'url' => $user->getFirstMediaUrl('avatar')]);
		}
		return response()->json(['success' => false], 400);
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
		$countries = \App\Models\Country::all();
		return view('content.register', compact('countries'));
	}

	public function registerStep1(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:8',
			'first_name' => 'required',
			'last_name' => 'required',
		]);
		if ($validator->fails())
			return response()->error(422, $validator->errors()->first());

		$user = User::create([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);
		auth()->login($user);
		return response()->success('Account created.', ['token' => csrf_token()]);
	}
	public function registerStep2(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'country_id' => 'required|exists:countries,id',
			'phone'      => 'required|numeric|digits_between:7,15',
		]);

		if ($validator->fails())
			return response()->error(422, $validator->errors()->first());

		$user = Auth::user();
		$country = Country::find($request->country_id);
		if (!$user)
			return response()->error(401, 'Session expired. Please start the registration again.');


		try {
			$user->update([
				'country_id' => $country->id,
				'currency_id' => $country->default_currency_id,
				'language_id' => $country->default_language_id,
				'timezone' => $country->default_timezone,
				'phone'      => $request->phone,
			]);
			return response()->success('Contact information updated successfully.');

		} catch (\Exception $e) {
			return response()->error(500, 'An error occurred while saving your information.');
		}
	}
	public function registerFinalize(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'gender' => 'required|in:male,female',
			'activity_level' => 'required|string|max:255',
			'fitness_goal' => 'required|string|max:255',
		]);

		if ($validator->fails()) return response()->error(422, $validator->errors()->first());

		$user = Auth::user();
		if (!$user) return response()->error(401, 'Session expired. Please start the registration again.');
		DB::beginTransaction();

		try {
			$user->assignRole('customer');
			Customer::create([
				'user_id'=> $user->id,
				'plan_id' => Plan::where('is_default', 1)->first()->id,
				'gender' => $request->gender,
				'activity_level' => $request->activity_level,
				'fitness_goal' => $request->fitness_goal,
			]);

			Wallet::create([
				'user_id' => $user->id,
				'currency_id' => $user->currency_id,
			]);

			DB::commit();
			Mail::to($user->email)->send(new WelcomeUserMail($user));
			return response()->success('Registration completed successfully! Welcome to the community.', ['redirect' => route('dashboard')]);

		} catch (\Exception $e) {
			DB::rollBack();
			return response()->error(500, 'An error occurred while saving your information.',['error'=> $e]);
		}
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
