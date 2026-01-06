<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up(): void
	{
		Schema::create('coaches', function (Blueprint $table) {
			$table->foreignId('user_id')->primary()->constrained('users')->onDelete('cascade');
			$table->string('headline')->nullable();
			$table->text('bio')->nullable();
			$table->json('specializations')->nullable();
			$table->integer('experience_years')->default(0);


			$table->json('social_links')->nullable();

			$table->boolean('is_verified')->default(false);
			$table->json('verification_documents')->nullable();

			$table->decimal('commission_percentage', 5, 2)->default(70.00);
			$table->unsignedTinyInteger('payout_day')->default(1);
			$table->string('bank_name')->nullable();
			$table->string('iban', 34)->nullable();
			$table->string('card_number', 20)->nullable();
			$table->string('account_holder_name')->nullable();


			$table->decimal('rating_average', 3, 2)->default(0.00);
			$table->integer('total_reviews')->default(0);
			$table->integer('active_students')->default(0);
			$table->timestamps();
		});
	}

	public function down(): void
	{
		Schema::dropIfExists('coaches');
	}
};
