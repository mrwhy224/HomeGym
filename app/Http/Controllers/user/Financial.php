<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Financial extends Controller
{
	public function wallet()
	{
		return view('content.user.wallet');
	}

	public function transaction()
	{
		return view('content.user.transaction');
	}
}
