<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class Category extends Controller
{
  public function view()
  {
    return view('content.post.category');
  }

  public function index()
  {
    return response()->success('success', PostCategory::withCount('posts')->get());
  }
}
