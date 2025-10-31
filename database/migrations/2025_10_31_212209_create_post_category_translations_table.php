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
		Schema::create('post_category_translations', function (Blueprint $table) {
			$table->id();
			$table->foreignId('category_id')->constrained('post_categories')->onDelete('cascade');


			$table->string('language_code');
			$table->foreign('language_code')->references('code')->on('languages')->onDelete('cascade');

			$table->string('name');
			$table->text('description')->nullable();

			$table->timestamps();
			$table->unique(['category_id', 'language_code']);
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('post_category_translations');
	}
};
