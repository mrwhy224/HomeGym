<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;

class Category extends Controller
{
  public function view()
  {
    return view('content.admin.post.category');
  }

  public function index()
  {
    return response()->success('success', PostCategory::withCount('posts')->get());
  }
}
