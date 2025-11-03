<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;

class HomeControllerMain extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('index2');
    }
    public function index3()
    {
        return view('index3');
    }
    public function index_one_page()
    {
        return view('index-one-page');
    }
    public function index2_one_page()
    {
        return view('index2-one-page');
    }
    public function index3_one_page()
    {
        return view('index3-one-page');
    }
    public function index_dark()
    {
        return view('index-dark');
    }
}
