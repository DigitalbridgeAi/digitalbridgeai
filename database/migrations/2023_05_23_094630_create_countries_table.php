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
            $table->string('name')->nullable();
            $table->string('iso2')->nullable();
            $table->string('iso3')->nullable();
            $table->integer('phone_code')->nullable();
            $table->tinyInteger('postcode_required')->nullable()->default(0);
            $table->tinyInteger('is_eu')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(0);
            $table->timestamps();
        });
        DB::unprepared(file_get_contents(base_path('database/migrations/currencies.sql')));

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
