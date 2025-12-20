<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WalletResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
		return [
			'id' => $this->id,
			'name' => $this->name,
			'holder_type' => $this->holder_type,
			'is_active' => (bool) $this->is_active,
			'financial' => [
				'currency' => new CurrencyResource($this->whenLoaded('currency')),
				'balance_raw' => (float) $this->balance,
				'balance_formatted' => $this->display_balance,

				'blocked_raw' => (float) $this->balance_blocked,
				'blocked_formatted' => number_format($this->balance_blocked),
				'available_raw' => (float) $this->available_balance,
			],
			'updated_at' => $this->updated_at->formatUser('Y-m-d H:i'),
		];
    }
}
