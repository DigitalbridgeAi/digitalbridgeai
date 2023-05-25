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
   

        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('deposit_number')->nullable();
            $table->string('currency_id')->nullable();
            $table->string('txnid')->nullable();
            $table->string('method')->nullable();
            $table->string('charge_id')->nullable();
            $table->enum('status', ['Yes', 'No'])->default('No');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
