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
		Schema::create('packages', function (Blueprint $table) {
			$table->id();
			$table->json('name');
			$table->enum('type', ['public', 'semi_private', 'private']);
			$table->integer('total_sessions')->default(12);
			$table->integer('capacity');
			$table->decimal('price', 15, 0);
			$table->integer('validity_days')->default(30);
			$table->boolean('is_active')->default(true);
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
