<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelpCenter extends Controller
{
	public function faq()
	{
		return view('content.user.faq');
	}
	public function support()
	{
		return view('content.user.support');
	}
}
