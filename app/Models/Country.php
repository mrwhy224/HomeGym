<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
	use HasFactory;
	protected $fillable = [
		'name',
		'code_alpha_2',
		'code_alpha_3',
		'dialing_code',
		'default_language_id',
		'default_currency_id',
		'default_timezone',
	];


	public function defaultLanguage(): BelongsTo
	{
		return $this->belongsTo(Language::class, 'default_language_id');
	}

	public function defaultCurrency(): BelongsTo
	{
		return $this->belongsTo(Currency::class, 'default_currency_id');
	}

	public function users(): HasMany
	{
		return $this->hasMany(User::class);
	}
}
