<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanResource extends JsonResource
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
			'description' => $this->description,
			'is_default' => (bool) $this->is_default,

			'discount' => [
				'type' => $this->discount_type,
				'value' => (float) $this->discount_value,
				'label' => $this->discount_type === 'percentage'? $this->discount_value .'%' :number_format($this->discount_value) . ' (Fixed)',
			],
			'created_at' => $this->created_at->formatUser('Y-m-d'),
		];
    }
}
