<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use App\Models\Plan;
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
}
