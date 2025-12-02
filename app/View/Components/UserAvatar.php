<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class UserAvatar extends Component
{
	public $user;
	public $class;
    /**
     * Create a new component instance.
     */
	public function __construct($user = null, $class = '')
    {
		$this->class = $class;
		if ($user)
			$this->user = $user instanceof User ? $user : User::find($user);
		else
			$this->user = Auth::user();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-avatar');
    }
}
