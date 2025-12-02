<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
//	public function __construct(protected CurrencyConverterService $converter)
//	{
//		//
//	}
	public function index()
	{
//		return $this->converter->getAmount(3, 'IRR',true, true);
		return view('content.admin.dashboard');
	}
}
