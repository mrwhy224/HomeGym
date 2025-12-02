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
		Schema::create('activities', function (Blueprint $table) {
			$table->id();
			$table->foreignId('coach_id')->constrained('users')->onDelete('cascade');
			$table->enum('type', ['public', 'semi_private', 'private']);
			$table->integer('capacity');
			$table->timestamp('start_at');
			$table->timestamp('end_at');
			$table->enum('status', ['scheduled', 'completed', 'cancelled_by_coach', 'cancelled_system'])->default('scheduled');
			$table->boolean('is_modified_duration')->default(false);
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
