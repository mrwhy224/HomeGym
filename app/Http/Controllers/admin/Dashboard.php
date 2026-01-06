<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
	public function index()
	{
		$now = Carbon::now();
		$stats = [
			'pending_tickets_count' => Ticket::whereIn('status', ['open', 'pending'])->count(),
			'pending_coaches_count' => 0,

			'monthly_revenue' => Transaction::where('type', 'block')
			->whereMonth('created_at', $now->month)
				->sum(DB::raw('ABS(amount)')),

			'active_customers' => User::role('customer')->count(),
			'total_coaches'    => User::role('coach')->count(),
			'active_tickets'   => Ticket::where('status', 'open')->count(),
			'monthly_transactions' => Transaction::whereMonth('created_at', $now->month)->count(),
		];

		$recentTickets = Ticket::with('user')
			->where('priority', 'high')
			->latest()
			->take(5)
			->get();

		$currencies = Currency::all(['code', 'exchange_rate']);
		$exchangeRates = $currencies->pluck('exchange_rate', 'code')->toArray();

		return view('content.admin.dashboard', compact('stats', 'recentTickets', 'exchangeRates'));
	}
}
