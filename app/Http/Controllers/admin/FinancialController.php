<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
	public function payout()
	{
		return view('content.admin.finance.payout');
	}
	public function transaction()
	{
		return view('content.admin.finance.transaction');
	}
	public function invoice()
	{
		return view('content.admin.finance.invoice');
	}
	public function wallet()
	{
		return view('content.admin.finance.wallet');
	}
}
