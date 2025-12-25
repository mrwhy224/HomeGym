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
		Schema::create('bookings', function (Blueprint $table) {
			$table->id();
			$table->foreignId('activity_id')->constrained('activities')->onDelete('cascade');
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
			$table->timestamp('cancelled_at')->nullable();
			$table->enum('cancelled_by', ['user', 'coach', 'admin', 'system'])->nullable();
			$table->text('cancellation_reason')->nullable();
			$table->timestamps();
			$table->unique(['activity_id', 'user_id']);
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
