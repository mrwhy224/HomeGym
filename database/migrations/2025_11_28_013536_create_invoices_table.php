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
		Schema::create('invoices', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')->constrained('users');
			$table->nullableMorphs('invoiceable');
			$table->foreignId('currency_id')->constrained('currencies')->onDelete('restrict');

			$table->decimal('amount', 19, 4);
			$table->decimal('tax', 19, 4)->default(0);
			$table->decimal('discount', 19, 4)->default(0);
			$table->decimal('final_total', 19, 4);

			$table->enum('status', ['pending', 'paid', 'cancelled', 'refunded'])->default('pending');
			$table->timestamp('paid_at')->nullable();
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
