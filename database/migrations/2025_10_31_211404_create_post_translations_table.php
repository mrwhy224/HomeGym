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
        Schema::create('post_translations', function (Blueprint $table) {
			$table->id();
			$table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
			$table->string('language_code');
			$table->foreign('language_code')->references('code')->on('languages')->onDelete('cascade');

			$table->string('title');
			$table->string('slug')->unique();
			$table->longText('content')->nullable();
			$table->text('excerpt')->nullable();
			$table->string('meta_title')->nullable();
			$table->text('meta_description')->nullable();
			$table->string('canonical_url')->nullable();

			$table->timestamps();

			// جلوگیری از ثبت دو ترجمه تکراری برای یک زبان
			$table->unique(['post_id', 'language_code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_translations');
    }
};
