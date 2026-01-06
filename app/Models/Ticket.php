<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
	// toDO: create Task for auto close Tickets
	protected $fillable = ['user_id', 'subject', 'tracking_code', 'status', 'priority'];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function messages(): HasMany
	{
		return $this->hasMany(TicketMessage::class);
	}
}
