<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivitySession extends Model
{
	protected $casts = [
		'start_at' => 'datetime',
		'end_at' => 'datetime',
	];
}
