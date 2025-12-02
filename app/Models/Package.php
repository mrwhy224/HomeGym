<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
	protected $fillable = ['name', 'type', 'total_sessions', 'price', 'validity_days', 'is_active'];

	protected $casts = [
		'name' => 'array',
		'is_active' => 'boolean',
	];

	public function userPackages()
	{
		return $this->hasMany(UserPackage::class);
	}
}
