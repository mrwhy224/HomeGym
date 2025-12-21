<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
	public function updateAvatar(Request $request)
	{
		$user = auth()->user();
		if ($request->hasFile('avatar'))
			$user->addMediaFromRequest('avatar')->toMediaCollection('avatar');

		return back()->with('success', 'Profile picture updated!');
	}

	public function loginAttempt(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'email-username' => 'required|string',
			'password' => 'required|string',
		]);

		if ($validator->fails())
			return response()->error(422,  'Please fill in all required fields.', $validator->errors());

		$loginType = filter_var($request->input('email-username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		$credentials = [
			$loginType => $request->input('email-username'),
			'password' => $request->input('password')
		];

		$remember = $request->has('remember-me');

		if (Auth::attempt($credentials, $remember)) {
			$request->session()->regenerate();

			return response()->success('Login successful! Redirecting...', ['redirect_url' => url('/panel')]);
		}

		return response()->error(401, 'The provided credentials do not match our records.');
	}
	public function showLogin()
	{
		return view('content.login');
	}

	public function showRegister()
	{
		return view('content.register');
	}
	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect('/panel');
	}
}
