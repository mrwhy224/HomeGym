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
        Schema::create('booking_sessions', function (Blueprint $table) {
			$table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
			$table->foreignId('activity_session_id')->constrained('activity_sessions')->onDelete('cascade');
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
			$table->timestamp('cancelled_at')->nullable();
			$table->text('cancellation_reason')->nullable();
			$table->enum('status', ['scheduled', 'completed', 'cancelled_by_coach', 'cancelled_system', 'cancelled_user'])->default('scheduled');
			$table->timestamps();
			$table->primary(['booking_id', 'activity_session_id']);
			$table->unique(['activity_session_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_sessions');
    }
};
