<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Currency extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'code',
		'symbol',
		'exchange_rate',
		'precision',
		'is_default',
	];

	protected $casts = [
		'exchange_rate' => 'decimal:9',
		'precision' => 'integer',
		'is_site_default' => 'boolean',
	];

	public function defaultForCountries(): HasMany
	{
		return $this->hasMany(Country::class, 'default_currency_id');
	}



	public function getRouteKeyName()
	{
		return 'code';
	}
}
