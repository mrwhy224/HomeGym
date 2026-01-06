<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CoachResource;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
	public function plan()
	{
		$plans = Plan::all();
		return view('content.admin.plans', ['plans'=>$plans]);
	}

	public function customers()
	{
		$customers = Customer::with('user', 'plan', 'user.wallet', 'user.country')->get();
		return response()->success("The request was successfully processed.", CustomerResource::collection($customers));
	}
	public function search(Request $request) {
		$search = $request->q;

		$users = User::role('customer')->where(function($query) use ($search) {
			$query->where('first_name', 'LIKE', "%$search%")
				->orWhere('email', 'LIKE', "%$search%");
		})->limit(10)
			->get();

		$formattedUsers = [];

		foreach ($users as $user) {
			$formattedUsers[] = [
				'id' => $user->id,
				'text' => $user->name . ' (' . $user->email . ')'
			];
		}
		return response()->success('The request was successfully processed.', $formattedUsers);
	}
}
