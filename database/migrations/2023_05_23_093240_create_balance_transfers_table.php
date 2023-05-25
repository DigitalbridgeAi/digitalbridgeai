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
        Schema::create('balance_transfers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('receiver_id')->nullable();
            $table->string('transaction_no')->nullable();
            $table->double('cost')->nullable();
            $table->integer('amount')->nullable();
            $table->double('final_amount')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 == \'pending\'
1 == \'approved\'
2 == \'rejected\'');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balance_transfers');
    }
};
