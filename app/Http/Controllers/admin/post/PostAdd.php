<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;

class PostAdd extends Controller
{
  public function index()
  {
    return view('content.admin.post.post-add');
  }
}
