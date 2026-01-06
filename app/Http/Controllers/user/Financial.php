<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Transaction;
use Illuminate\Http\Request;

class Financial extends Controller
{
	public function wallet()
	{
		return view('content.user.wallet');
	}
	public function invoice(Invoice $invoice)
	{
		return view('content.user.invoice', ['invoice'=>$invoice]);
	}

	public function transaction()
	{
		$transactions = Transaction::where('wallet_id', auth()->user()->wallet->id)
			->latest()
			->paginate(10);
		return view('content.user.transaction', ['transactions' => $transactions]);
	}
}
