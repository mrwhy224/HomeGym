<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasMedia
{
	use HasFactory, Notifiable, InteractsWithMedia, HasRoles;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'phone',
		'password',
		'country_id',
		'currency_id',
		'language_id',
		'timezone',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
		'phone_verified_at' => 'datetime', // افزودن
	];

	/**
	 * (اختیاری اما پیشنهادی)
	 * یک Accessor برای 'name' ایجاد کنید تا کدهای دیگر به مشکل نخورند.
	 */
	public function getNameAttribute()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	public function getInitialsAttribute(): string
	{
		$first = mb_substr($this->first_name, 0, 1);
		$last = mb_substr($this->last_name, 0, 1);

		return strtoupper($first . $last);
	}
	public function getAvatarColorAttribute(): string
	{
		$colors = ['primary', 'success', 'danger', 'warning', 'info', 'dark'];
		$index = $this->id % count($colors);
		return $colors[$index];
	}
	public function wallet(): HasOne
	{
		return $this->hasOne(Wallet::class);
	}
	public function customer(): HasOne
	{
		return $this->hasOne(Customer::class);
	}
	public function coach(): HasOne
	{
		return $this->hasOne(Coach::class);
	}
	public function country()
	{
		return $this->belongsTo(Country::class);
	}
	public function currency()
	{
		return $this->belongsTo(Currency::class);
	}

	public function language()
	{
		return $this->belongsTo(Language::class);
	}

	public function registerMediaCollections(): void
	{
		$this->addMediaCollection('avatar')->singleFile();
	}
}
