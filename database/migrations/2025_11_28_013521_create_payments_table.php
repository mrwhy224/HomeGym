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
		Schema::create('payments', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')->constrained('users')->onDelete('restrict');
			$table->decimal('amount', 19, 4);
			$table->decimal('paid_amount', 19, 4);
			$table->foreignId('currency_id')->constrained('currencies')->onDelete('restrict');
			$table->decimal('exchange_rate', 19, 9)->default(1);

			$table->string('gateway');
			$table->string('transaction_ref_id')->nullable();
			$table->enum('status', ['pending', 'success', 'failed', 'cancelled'])->default('pending');
			$table->text('description')->nullable();

			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
