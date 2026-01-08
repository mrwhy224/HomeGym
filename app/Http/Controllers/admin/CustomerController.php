<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CoachResource;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use App\Models\Plan;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use App\Services\CurrencyConverterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
	protected $currencyConverter;

	public function __construct(CurrencyConverterService $currencyConverter)
	{
		$this->currencyConverter = $currencyConverter;
	}
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
	public function recharge(Request $request)
	{
		$request->validate([
			'user_id' => 'required|exists:users,id',
			'amount'  => 'required|numeric|min:0.01',
			'note'    => 'nullable|string|max:255',
		]);

		try {
			return DB::transaction(function () use ($request) {
				$wallet = Wallet::where('user_id', $request->user_id)->lockForUpdate()->first();

				if (!$wallet)
					return response()->error(404, 'User financial record not found.');

				$wallet->increment('balance', $this->currencyConverter->fromDefault($request->amount, $wallet->currency->code));

				Transaction::create([
					'wallet_id' => $wallet->id,
					'type'=> 'deposit',
					'amount' => $request->amount,
					'original_amount'=>  $this->currencyConverter->fromDefault($request->amount, $wallet->currency->code),
					'currency_id' => $wallet->currency->id,
					'exchange_rate'=> $this->currencyConverter->getConversionRateFromDefault($wallet->currency->code),
					'description'  => $request->note ?? 'Manual recharge by Admin',
				]);

				return response()->success('Wallet charged successfully.');
			});

		} catch (\Exception $e) {
			return response()->error(500, 'Failed to recharge wallet. Please try again.', $e);
		}
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
