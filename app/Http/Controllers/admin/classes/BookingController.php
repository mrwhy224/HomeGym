<?php

namespace App\Http\Controllers\admin\classes;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
	public function index()
	{
		return view('content.admin.booking.all');
	}
	public function calendar()
	{
		return view('content.admin.booking.calender', ['users'=>User::all()]);
	}
}
