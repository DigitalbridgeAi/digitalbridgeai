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
     
        Schema::create('invests', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_no')->nullable();
            $table->string('charge_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('plan_id')->nullable();
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->string('method')->nullable();
            $table->double('amount')->nullable();
            $table->double('profit_amount')->nullable();
            $table->double('hold_amount')->nullable();
            $table->double('profit')->nullable()->default(0);
            $table->tinyInteger('lifetime_return')->default(0)->comment('1 == \'yes\',
0 == \'no\'');
            $table->integer('profit_repeat')->nullable();
            $table->tinyInteger('capital_back')->default(0)->comment('1 == \'yes\',
0 == \'no\'');
            $table->enum('payment_status', ['pending', 'completed'])->default('pending');
            $table->tinyInteger('status')->default(0)->comment('0 == \'pending\',
1 == \'running\',
2 == \'completed\'');
            $table->timestamp('profit_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invests');
    }
};
