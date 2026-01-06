<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Payroll;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinancialController extends Controller
{
	public function payout(Request $request)
	{
		$today = Carbon::now()->startOfDay();
		$stats = [
			'total_paid' => Payroll::where('status', 'paid')->sum('total_amount'),
			'pending_amount' => Payroll::whereIn('status', ['pending', 'draft'])->sum('total_amount'),
			'total_commission' => Payroll::where('status', 'paid')->sum('total_amount'),
			'overdue_count' => Payroll::where('status', 'pending')
				->where('period_end', '<', $today)
				->count()
		];
		$query = Payroll::with(['coach', 'currency']);
		if ($request->has('status') && $request->status != 'all') {
			$query->where('status', $request->status);
		}

		$payrolls = $query->latest('period_start')->paginate(15);

		return view('content.admin.finance.payout', compact('stats', 'payrolls'));
	}
	public function transaction(Request $request)
	{
		$stats = [
			'totalVolume' => Transaction::sum(DB::raw('ABS(amount)')),
			'monthlyVolume' => Transaction::where('created_at', '>=', Carbon::now()->startOfMonth())
				->sum(DB::raw('ABS(amount)')),
			'weeklyVolume' => Transaction::where('created_at', '>=', Carbon::now()->startOfWeek())
				->sum(DB::raw('ABS(amount)')),
			'dailyVolume' => Transaction::where('created_at', '>=', Carbon::now()->startOfDay())
				->sum(DB::raw('ABS(amount)')),
		];
		$query = Transaction::with(['wallet.user', 'currency']);
		if ($request->has('type') && $request->type != 'All Types')
			$query->where('type', $request->type);

		$transactions = $query->latest()->paginate(10);
		return view('content.admin.finance.transaction', compact('stats', 'transactions'));
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
