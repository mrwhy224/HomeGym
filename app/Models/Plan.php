<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
	protected $fillable = [
		'name',
		'description',
		'discount_type',
		'discount_value',
		'is_default',
	];

	public function customerProfiles(): hasMany
	{
		return $this->hasMany(Customer::class);
	}

}
