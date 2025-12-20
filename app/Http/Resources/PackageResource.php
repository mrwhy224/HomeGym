<?php

namespace App\Http\Resources;

use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class PackageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
		$baseCurrencyData = $this->loadCurrenciesFromCache()->firstWhere('is_default', 1);
        return [
			'id' => $this->id,
			'name' => $this->name,
			'type' => $this->type,
			'price' => number_format($this->price) . ' ' . $baseCurrencyData->symbol,
			'capacity' => $this->capacity,
			'total_sessions' => $this->total_sessions,
			'validity_days' => $this->validity_days,
			'status' => $this->is_active ? 1 : 0,
			'lang' => app()->getLocale(),
			'action' => $this->getAttributes(),
		];
    }
	protected function loadCurrenciesFromCache(): Collection
	{
		return Cache::rememberForever('currencies', function () {
			return Currency::get()->keyBy('code');
		});
	}
}
