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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // === CORE CONTENT ===
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content');
            $table->text('excerpt')->nullable();
            $table->string('featured_image')->nullable(); // Path to the main image

            // === RELATIONSHIPS ===
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
            
            // IMPORTANT!
            // toDo: add lang key into lang table


            // === STATUS & SCHEDULING (Important Stuff) ===
            $table->enum('status', ['published', 'draft', 'pending_review'])->default('draft');
            $table->timestamp('published_at')->nullable();

            // === SEO OPTIONS ===
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('meta_robots')->nullable()->default('index, follow');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
