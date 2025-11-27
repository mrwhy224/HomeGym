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
		Schema::create('private_class_requests', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
			$table->foreignId('coach_id')->constrained('users')->onDelete('cascade');
			$table->foreignId('user_package_id')->constrained('user_packages')->onDelete('cascade');
			$table->timestamp('requested_start_at');
			$table->integer('duration_minutes')->default(60);
			$table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
			$table->text('admin_note')->nullable();
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('private_class_requests');
    }
};
