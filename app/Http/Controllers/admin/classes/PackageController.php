<?php

namespace App\Http\Controllers\admin\classes;

use App\Http\Resources\CurrencyResource;
use App\Http\Resources\PackageResource;
use App\Models\Currency;
use App\Models\Package;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController
{
	public function index()
	{
		$baseCurrencyData = $this->loadCurrenciesFromCache()->firstWhere('is_default', 1);

		$packages = Package::all()->map(function ($package) use ($baseCurrencyData) {
			return [
				'id' => $package->id,
				'name' => $package->name,
				'type' => $package->type,
				'price' => number_format($package->price).' '.$baseCurrencyData->symbol,
				'capacity' => $package->capacity,
				'total_sessions' => $package->total_sessions,
				'validity_days' => $package->validity_days,
				'status' => $package->is_active ? 1 : 0,
				'action' => $package->getAttributes(),
			];
		});
		return response()->success('The request was successfully processed.', PackageResource::collection(Package::all()));
	}
	public function getPage()
	{
		return view('content.admin.package');
	}
	protected function loadCurrenciesFromCache(): Collection
	{
		return Cache::rememberForever('currencies', function () {
			return Currency::get()->keyBy('code');
		});
	}
	private function getActiveLocales(): array
	{
		return Cache::rememberForever('active_locales', function () {
			return DB::table('languages')->pluck('code', 'name')->toArray();
		});
	}

	public function remove(Package $package)
	{
		// toDo: check there is no activity for this package
		$package->delete();
		return response()->success('Package has been deleted.');
	}

	public function store(Request $request)
	{
		$rules = [
			'type'           => 'required|in:public,semi_private,private',
			'total_sessions' => 'required|integer|min:1',
			'capacity'       => 'required|integer|min:1',
			'price'          => 'required|numeric|min:0',
			'validity_days'  => 'required|integer|min:1',
			'name'           => 'array|required',
		];

		foreach ($this->getActiveLocales() as $locale)
			if ($locale == 'en') // toDo: load from database
				$rules['name.' . $locale] = 'required|string|max:255';
			else
				$rules['name.' . $locale] = 'nullable|string|max:255';



		$validatedData = $request->validate($rules);

		$validatedData['is_active'] = $request->has('is_active') ? 1 : 0;
		Package::create($validatedData);

		return response()->success('Package created successfully!');

	}
	/**
	 * Update the specified package in storage.
	 */
	public function update(Request $request, $id)
	{
		$package = Package::findOrFail($id);
		$rules = [
			'type'           => 'required|in:public,semi_private,private',
			'total_sessions' => 'required|integer|min:1',
			'capacity'       => 'required|integer|min:1',
			'price'          => 'required|numeric|min:0',
			'validity_days'  => 'required|integer|min:1',
			'name'           => 'array|required',
		];
		foreach ($this->getActiveLocales() as $locale) {
			if ($locale == 'en') {
				$rules['name.' . $locale] = 'required|string|max:255';
			} else {
				$rules['name.' . $locale] = 'nullable|string|max:255';
			}
		}
		$validatedData = $request->validate($rules);
		$validatedData['is_active'] = $request->has('is_active') ? 1 : 0;
		$package->update($validatedData);
		return response()->success('Package updated successfully!');
	}

}
