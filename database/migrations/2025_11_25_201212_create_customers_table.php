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
        Schema::create('customers', function (Blueprint $table) {
			$table->foreignId('user_id')->primary()->constrained('users')->onDelete('cascade');
			$table->foreignId('plan_id')->constrained('plans')->onDelete('restrict');
			$table->enum('gender', ['male', 'female', 'other'])->nullable();
			$table->date('date_of_birth')->nullable();
			$table->enum('activity_level', ['sedentary', 'light', 'moderate', 'active', 'very_active'])->nullable();
			$table->string('fitness_goal')->nullable();
			$table->text('bio')->nullable();
			$table->text('medical_conditions')->nullable();
			$table->text('dietary_restrictions')->nullable();
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
