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
    
        Schema::create('kyc_forms', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_type')->nullable();
            $table->integer('type')->nullable();
            $table->string('label')->nullable();
            $table->string('name')->nullable();
            $table->tinyInteger('required')->default(0);
            $table->tinyInteger('status')->default(0);  

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kyc_forms');
    }
};
