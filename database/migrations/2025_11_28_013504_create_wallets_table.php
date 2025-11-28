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
		Schema::create('wallets', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
			$table->foreignId('currency_id')->constrained('currencies')->onDelete('restrict');
			$table->string('name')->default('Main Wallet');
			$table->enum('holder_type', ['user', 'system'])->default('user');
			$table->decimal('balance', 19, 4)->default(0);
			$table->decimal('balance_blocked', 19, 4)->default(0);
			$table->boolean('is_active')->default(true);
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
