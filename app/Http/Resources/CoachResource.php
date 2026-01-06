<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CoachResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @return array<string, mixed>
	 */
	public function toArray(Request $request): array
	{
		return [
			'id' => $this->user_id,
			'user' => new UserResource($this->whenLoaded('user')),
			'wallet' => $this->when(
				$this->relationLoaded('user') && $this->user->relationLoaded('wallet'),
				function () {
					return new WalletResource($this->user->wallet);
				}
			),
			'join_at' => $this->created_at->formatUser('Y-m-d H:i'),
		];
	}
}
