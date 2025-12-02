<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;
use App\Models\User;

class PostList extends Controller
{

  public function index()
  {

    $totalUserCount = User::count();
    $verifiedUserCount = User::whereNotNull('email_verified_at')->count();
    $duplicateUsersCount = User::select('email')
      ->groupBy('email')
      ->havingRaw('COUNT(*) > 1')
      ->get()
      ->count();
    $notVerifiedUserCount = User::whereNull('email_verified_at')->count();


    $data = [

      'totalUser' => $totalUserCount,
      'verified'  => $verifiedUserCount,
      'userDuplicates' => $duplicateUsersCount,
      'notVerified'    => $notVerifiedUserCount
    ];


    return view('content.admin.post.post-list', $data);
  }

}




//'content.post.post-list'
