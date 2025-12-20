<?php

namespace App\Http\Controllers\admin\classes;

use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\Package;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
	{
		return view('content.admin.classes.all');
	}

	public function create()
	{
		return view('content.admin.classes.create', ['packages'=>Package::all(), 'coaches'=>Coach::all()]);
	}
}
