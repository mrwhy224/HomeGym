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
		Schema::create('plans', function (Blueprint $table) {
			$table->id();
			$table->string('name')->unique();
			$table->text('description')->nullable();
			$table->enum('discount_type', ['percentage', 'fixed'])->default('percentage');
			$table->decimal('discount_value', 8, 2)->default(0.00);
			$table->boolean('is_default')->default(false)->index();
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
