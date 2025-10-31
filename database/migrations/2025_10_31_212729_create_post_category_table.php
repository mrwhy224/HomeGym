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
        Schema::create('post_to_category', function (Blueprint $table) {
			$table->foreignId('category_id')->constrained('post_categories')->onDelete('cascade');
			$table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
			$table->primary(['category_id', 'post_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_category');
    }
};
