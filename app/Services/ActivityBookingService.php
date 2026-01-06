<?php
namespace App\Services;

use App\Models\Activity;
use App\Models\User;
use App\Models\Booking;
use App\Models\BookingSession;
use App\Models\Transaction;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;
use Exception;

class ActivityBookingService
{
	protected $currencyConverter;

	public function __construct(CurrencyConverterService $currencyConverter)
	{
		$this->currencyConverter = $currencyConverter;
	}

	/**
	 * منطق مرکزی رزرو کلاس
	 */
	public function book(Activity $activity, User $user)
	{
		return DB::transaction(function () use ($activity, $user) {
			Activity::where('id', $activity->id)->lockForUpdate()->first();

			if ($activity->remaining_capacity <= 0)
				throw new Exception("There is no capacity available for this class.");


			// toDo: check hasConflict

			// toDo: load price by user plan
			$coach = $activity->coach;
			$price = $this->currencyConverter->fromDefault($activity->package->price, $user->wallet->currency->code);
			if ($user->wallet->balance < $price)
				throw new Exception("Insufficient wallet balance.");

			$user->wallet->decrement('balance', $price);
			$coach->wallet->increment('balance_blocked', $this->currencyConverter->fromDefault($activity->package->price*(0.01*$coach->coach->commission_percentage), $coach->wallet->currency->code));

			// toDo: add to system wallet blocked and normal commission
			Transaction::create([
				'wallet_id' => $user->wallet->id,
				'type' => 'transfer',
				'amount' => -$activity->package->price,
				'original_amount'=> -$price,
				'currency_id' => $user->wallet->currency->id,
				'exchange_rate'=>$this->currencyConverter->getConversionRateFromDefault($user->wallet->currency->code),
				'reference_type'  => Activity::class,
				'reference_id'    => $activity->id,
				'description'     => "for buy activity",
			]);
			Transaction::create([
				'wallet_id' => $coach->wallet->id,
				'type' => 'block',
				'amount' => $activity->package->price*(0.01*$coach->coach->commission_percentage),
				'original_amount'=> $this->currencyConverter->fromDefault($activity->package->price*(0.01*$coach->coach->commission_percentage), $coach->wallet->currency->code),
				'currency_id' => $coach->wallet->currency->id,
				'exchange_rate'=>$this->currencyConverter->getConversionRateFromDefault($coach->wallet->currency->code),
				'reference_type'  => Activity::class,
				'reference_id'    => $activity->id,
				'description'     => "for buy activity",
			]);

			$booking = Booking::create([
				'user_id' => $user->id,
				'activity_id' => $activity->id
			]);

			foreach ($activity->sessions as $session)
				BookingSession::create([
					'booking_id' => $booking->id,
					'user_id' => $user->id,
					'activity_session_id' => $session->id,
				]);
			Invoice::create([
				'user_id' => $user->id,
				'invoiceable_type' => Activity::class,
				'invoiceable_id'    => $activity->id,
				'amount' => $price,
				'currency_id' => $user->wallet->currency->id,
				'tax' => 0,
				'discount'=> 0,
				'final_total' => $price,
				'status' => 'paid',
				'paid_at'=>now()
			]);

			$activity->decrement('remaining_capacity');
			return response()->success('Activity added successfully!');
		});
	}

}
