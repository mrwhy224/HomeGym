<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function updateAvatar(Request $request)
	{
		// $user->getFirstMediaUrl('avatar')
		$user = auth()->user();
		if ($request->hasFile('avatar'))
			$user->addMediaFromRequest('avatar')->toMediaCollection('avatar');

		return back()->with('success', 'Profile picture updated!');
	}
}
