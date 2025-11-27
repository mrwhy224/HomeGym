<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;

class Comment extends Controller
{
  public function index()
  {
    return view('content.admin.post.comment');
  }
}
