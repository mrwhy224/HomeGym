<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable
{
	use HasFactory, Notifiable, InteractsWithMedia;
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

	// --- افزودن روابط (Relations) ---

	public function country()
	{
		return $this->belongsTo(Country::class);
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
