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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('code_alpha_2', 2)->unique();
			$table->string('code_alpha_3', 3)->unique();
			$table->string('dialing_code', 10)->nullable();
			$table->foreignId('default_language_id')->nullable()->constrained('languages')->onDelete('set null');
			$table->foreignId('default_currency_id')->nullable()
				->constrained('currencies')
				->onDelete('set null');
			$table->string('default_timezone', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
