<?php

namespace App\Http\Controllers\coach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
	public function index()
	{
		return view('content.coach.dashboard');
	}
}
