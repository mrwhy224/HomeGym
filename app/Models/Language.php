<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'code',
		'direction',
		'is_default',
	];

	protected $casts = [
		'is_default' => 'boolean',
	];

	public function defaultForCountries(): HasMany
	{
		return $this->hasMany(Country::class, 'default_language_id');
	}

	public function users(): HasMany
	{
		return $this->hasMany(User::class, 'language_id');
	}

	public function isRtl(): bool
	{
		return $this->direction === 'rtl';
	}

	public function getRouteKeyName()
	{
		return 'code';
	}
}
