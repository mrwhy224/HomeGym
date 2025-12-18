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
        Schema::table('users', function (Blueprint $table) {
			$table->foreignId('country_id')->nullable()->constrained('countries')->onDelete('set null');
			$table->foreignId('currency_id')->nullable()->constrained('currencies')->onDelete('set null');
			$table->foreignId('language_id')->nullable()->constrained('languages')->onDelete('set null');
			// toDo: change default timezone
			$table->string('timezone', 64)->default('Asia/Tehran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
