<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CoachResource;
use App\Mail\WelcomeCoachMail;
use App\Models\Coach;
use App\Models\Country;
use App\Models\Customer;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CoachController extends Controller
{
	public function coaches()
	{
		$customers = Coach::with('user', 'user.wallet', 'user.country')->get();
		return response()->success("The request was successfully processed.", CoachResource::collection($customers));
	}

	public function index()
	{
		$countries = Country::orderBy('name', 'asc')->get();
		return view('content.admin.users.coach', ['countries'=>$countries]);
	}

	public function store(Request $request)
	{
		$request->validate([
			'first-name' => 'required|string|max:255',
			'last-name' => 'required|string|max:255',
			'email' => 'required|email|unique:users,email',
			'phone' => 'required|string',
			'country_id' => 'required|exists:countries,id',
			'payout_day' => 'required|integer|between:1,30',
			'experience_years' => 'required|integer|min:0',
			'commission_percentage' => 'required|numeric|between:0,100',
		]);

		DB::beginTransaction();

		try {
			$randomPassword = Str::random(10);
			// $randomPassword = '123456';
			$coach_country = Country::find($request->input('country_id'));

			$user = User::create([
				'first_name' => $request->input('first-name'),
				'last_name' => $request->input('last-name'),
				'email' => $request->input('email'),
				'phone' => $request->input('phone'),
				'password' => Hash::make($randomPassword),
				'country_id' => $coach_country->id,
				'currency_id' => $coach_country->default_currency_id,
				'language_id' => $coach_country->default_language_id,
				'timezone' => $coach_country->default_timezone,
			]);

			$user->assignRole('coach');
			Wallet::create([
				'user_id' => $user->id,
				'currency_id' => $coach_country->default_currency_id, // ارز پایه (مثلاً دلار)
				'balance' => 0
			]);

			Coach::create([
				'user_id' => $user->id,
				'payout_day' => $request->payout_day,
				'experience_years' => $request->experience_years,
				'commission_percentage' => $request->commission_percentage,
				'is_verified'=>1,
			]);

			Mail::to($user->email)->send(new WelcomeCoachMail($user->name, $user->email, $randomPassword));
			DB::commit();

			return response()->json([
				'status' => 'success',
				'message' => 'Coach created successfully!'
			], 201);

		} catch (\Exception $e) {
			DB::rollBack();
			return response()->json([
				'status' => 'error',
				'message' => 'Failed to create coach: ' . $e->getMessage()
			], 500);
		}
	}
}
