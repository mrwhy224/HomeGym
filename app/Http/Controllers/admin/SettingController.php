<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
	public function general()
	{
		return view('content.admin.setting.general');
	}
	public function language()
	{
		return view('content.admin.setting.language');
	}
	public function currency()
	{
		return view('content.admin.setting.currency');
	}
	public function payment()
	{
		return view('content.admin.setting.payment');
	}
	public function log()
	{
		return view('content.admin.setting.log');
	}
	public function backup()
	{
		return view('content.admin.setting.backup');
	}
	public function profile()
	{
		return view('content.admin.profile');
	}
}
