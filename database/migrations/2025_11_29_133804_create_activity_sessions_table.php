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
        Schema::create('activity_sessions', function (Blueprint $table) {
            $table->id();
			$table->foreignId('activity_id')->constrained('activities')->onDelete('cascade');
			$table->timestamp('start_at');
			$table->timestamp('end_at');
			$table->enum('status', ['scheduled', 'completed', 'cancelled_by_coach', 'cancelled_system'])->default('scheduled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_sessions');
    }
};
