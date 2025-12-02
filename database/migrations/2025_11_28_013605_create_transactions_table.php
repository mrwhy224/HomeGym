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
		Schema::create('transactions', function (Blueprint $table) {
			$table->uuid('id')->primary();

			$table->foreignId('wallet_id')->constrained('wallets')->onDelete('restrict');

			$table->enum('type', [
				'deposit',
				'withdraw',
				'block',
				'unblock',
				'transfer',
				'commission',
				'salary_payout',
				'refund'
			]);

			$table->decimal('amount', 19, 4);
			$table->boolean('confirmed')->default(true);

			$table->decimal('original_amount', 19, 4)->nullable();
			$table->foreignId('currency_id')->nullable()->constrained('currencies')->onDelete('restrict');
			$table->decimal('exchange_rate', 19, 9)->default(1);

			$table->nullableMorphs('reference');
			$table->string('description')->nullable();
			$table->json('meta')->nullable();

			$table->timestamps();
			$table->index(['wallet_id', 'type']);
			$table->index('created_at');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
