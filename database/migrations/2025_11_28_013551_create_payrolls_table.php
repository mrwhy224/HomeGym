<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
		Schema::create('payrolls', function (Blueprint $table) {
			$table->id();
			$table->foreignId('coach_id')->constrained('users');
			$table->decimal('total_amount', 19, 4);
			$table->decimal('payout_amount', 19, 4)->nullable();
			$table->foreignId('currency_id')->nullable()->constrained('currencies')->onDelete('restrict');
			$table->decimal('exchange_rate', 19, 9)->default(1);
			$table->date('period_start');
			$table->date('period_end');
			$table->enum('status', ['draft', 'processing', 'paid', 'rejected'])->default('draft');
			$table->json('details')->nullable();
			$table->string('tracking_code')->nullable();
			$table->timestamp('paid_at')->nullable();

			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
