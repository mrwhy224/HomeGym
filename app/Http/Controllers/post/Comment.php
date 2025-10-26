<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Comment extends Controller
{
  public function index()
  {
    return view('content.post.comment');
  }
}
