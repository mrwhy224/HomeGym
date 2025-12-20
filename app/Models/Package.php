<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Package extends Model
{
	use HasTranslations;

	public $translatable = ['name'];

	protected $fillable = ['name', 'type', 'capacity', 'total_sessions', 'price', 'validity_days', 'is_active'];

	protected $casts = [
		'is_active' => 'boolean',
	];

	public function userPackages()
	{
		return $this->hasMany(UserPackage::class);
	}
}
