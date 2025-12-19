<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
	public function monitoring()
	{
		return view('content.admin.message.monitoring');
	}

	public function support()
	{
		return view('content.admin.message.support');
	}
}
